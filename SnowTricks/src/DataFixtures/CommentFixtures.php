<?php

namespace App\DataFixtures;


use App\Entity\Comment;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = new Factory;
        $faker = $faker->create('fr_FR');

        for ($c = 1; $c <= mt_rand(45, 50); $c++) {

            $trick = $this->getReference('trick-'. mt_rand(1, 15));

            $comment = new Comment();
            $content =  join([$faker->paragraph(2)]);
            $days = (new \DateTime())->diff($trick->getDateCreation())->days;

            $comment->setDateCreation($faker->dateTimeBetween('-' . $days . 'days'))
                ->setContent($content)
                ->setTrick($trick)
                ->setUser($this->getReference('user-'.mt_rand(1, 2)))
            ;

            $manager->persist($comment);

        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            TrickFixtures::class,
            UserFixtures::class,
        );
    }
}