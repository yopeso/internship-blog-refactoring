<?php

namespace App\DataFixtures;

use App\Entity\LinkTo;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function encodePassword($user, $plainPassword)
    {
        return $this->passwordEncoder->encodePassword($user, $plainPassword);
    }

    public function load(ObjectManager $manager)
    {

        $user = new User;

        $plainPassword = 'root';
        $newPassword = $this->encodePassword($user, $plainPassword);

        $user->setEmail('superadmin@admin.fr')
            ->setPseudo('SuperAdmin')
            ->setRoles(['ROLE_ADMIN'])
            ->setEnable(true)
            ->setPassword($newPassword)
           ->setProfilePicture($this->getReference('profilePicture-1'))
        ;

        $this->addReference('user-1', $user);

        $manager->persist($user);

        $user2 = new User;


        $user2->setEmail('user@user.fr')
            ->setPseudo('User')
            ->setRoles(['ROLE_USER'])
            ->setEnable(true)
            ->setPassword($newPassword)
            ->setProfilePicture($this->getReference('profilePicture-2'))
        ;

        $this->addReference('user-2', $user2);

        $manager->persist($user2);

    }

    public function getDependencies()
    {
        return array(
            ProfilePictureFixtures::class,
        );
    }
}
