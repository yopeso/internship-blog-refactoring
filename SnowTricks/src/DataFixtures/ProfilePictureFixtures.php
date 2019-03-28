<?php

namespace App\DataFixtures;

use App\Entity\ProfilePicture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ProfilePictureFixtures extends Fixture
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;

    }

    public function load(ObjectManager $manager)
    {
        for ($a = 1; $a <= 2; $a++) {
            $profilePicture = new ProfilePicture;
            $path = $this->targetDirectory;
            copy($path.'/bob-'.$a.'.jpeg', $path.'/bob-'.$a.'-copy.jpeg');

            $profilePicture->setTargetDirectory($path);

            $file = new UploadedFile($path.'/bob-'.$a.'-copy.jpeg', 'bob-'.$a, null, null, null, true);

            $profilePicture->setFile($file);


            $this->addReference('profilePicture-' . $a, $profilePicture);
        }
    }
}
