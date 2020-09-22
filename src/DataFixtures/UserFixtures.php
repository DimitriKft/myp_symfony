<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('dev@gmail.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->encodePassword($user,'azeaze'));
        $user->setLastName('Rasmus');
        $user->setFirstName('Lerdorf');
        $manager->persist($user);

        $user2 = new User();
        $user2->setEmail('dim@mail.com');
        $user2->setRoles(['ROLE_ADMIN']);
        $user2->setPassword($this->passwordEncoder->encodePassword($user2,'azeaze'));
        $user2->setLastName('Klopfstein');
        $user2->setFirstName('Dimitri');
        $manager->persist($user2);
    
        $manager->flush();
    }
}