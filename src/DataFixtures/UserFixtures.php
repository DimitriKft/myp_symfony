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
        $user->setEmail('admin@mail.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->encodePassword($user,'admin'));
        $user->setLastName('Lerdorf');
        $user->setFirstName('Rasmus');
        $user->setPhone('07.77.88.29.32');
        $user->setLinkedin('https://www.linkedin.com/in/dimitri-klopfstein-12b399178/');
        $user->setGithub('https://github.com/DimitriKft');
        $manager->persist($user);
    
        $manager->flush();
    }
}