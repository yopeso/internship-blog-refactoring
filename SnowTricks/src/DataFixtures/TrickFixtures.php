<?php

namespace App\DataFixtures;

use App\Entity\Trick;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class TrickFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = new Factory;
        $faker = $faker->create('fr_FR');


        for ($d = 1; $d <= 45; $d++) {

            $trick = new Trick();

            $content = '<p>' . join([$faker->paragraph(10)], '</p><p>') . '</p>';

            $trick->setName($faker->sentence())
                ->setContent($content)
                ->setDateCreation($faker->dateTimeBetween('-6 months'))
                ->setPictureDefault($this->getReference('picture-'. mt_rand(1, 40)))
                ->addPicture($this->getReference('picture-'. mt_rand(1, 40)))
                ->addVideo($this->getReference('video-'. mt_rand(1, 20)))
                ->addPicture($this->getReference('picture-'. mt_rand(1, 30)))
                ->addVideo($this->getReference('video-'. mt_rand(1, 20)))
                ->setTrickCategory($this->getReference('category-'. mt_rand(1, 6)))
                ->setUser($this->getReference('user-'.mt_rand(1, 2)))
            ;

            $manager->persist($trick);

            $this->addReference('trick-'.$d , $trick);

        }
    }

    public function getDependencies()
    {
        return array(
            ProfilePictureFixtures::class,
            UserFixtures::class,
            CategoryFixtures::class,
            PictureFixtures::class,
            VideoFixtures::class
        );
    }
}
