<?php

namespace App\DataFixtures;


use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = new Factory;
        $faker = $faker->create('fr_FR');

        for ($i = 1; $i <= 6; $i++) {
            $group = new Category();
            $group->setName($faker->sentence());

            $manager->persist($group);

            $this->addReference('category-'.$i , $group);
        }

    }
}