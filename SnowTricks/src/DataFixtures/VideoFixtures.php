<?php

namespace App\DataFixtures;


use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class VideoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = new Factory;
        $faker = $faker->create('fr_FR');

        for ($b = 1; $b <=40; $b++) {
            $video = new Video();

            $video->setName('UGdif-dwu-8')
                ->setPlatform(0);

            $this->addReference('video-'.$b , $video);
        }

    }
}