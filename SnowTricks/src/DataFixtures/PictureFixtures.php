<?php

namespace App\DataFixtures;


use App\Entity\Picture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class PictureFixtures extends Fixture
{
    public function load(ObjectManager $manager )
    {
        $faker = new Factory;
        $faker = $faker->create('fr_FR');

        for ($a = 1; $a <= 40; $a++) {

            $picture = new Picture();

            $picture->setName('snow-'. mt_rand(1, 4) .'.jpg')
                ->setAlt($faker->name());

            $this->addReference('picture-' . $a, $picture);
        }
    }
}