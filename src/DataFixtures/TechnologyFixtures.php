<?php

namespace App\DataFixtures;

use App\Entity\Technologies;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TechnologyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $techno = new Technologies();
        $techno->setName('PHP');
        $techno->setSlug('php');
        $manager->persist($techno);
        
        $techno1 = new Technologies();
        $techno1->setName('JavaScript');
        $techno1->setSlug('js');
        $manager->persist($techno1);

        $techno2 = new Technologies();
        $techno2->setName('Symfony');
        $techno2->setSlug('symfony');
        $manager->persist($techno2);

        $techno3 = new Technologies();
        $techno3->setName('WordPress');
        $techno3->setSlug('wordpress');
        $manager->persist($techno3);

        $techno4 = new Technologies();
        $techno4->setName('Laravel');
        $techno4->setSlug('larvel');
        $manager->persist($techno4);

        $techno5 = new Technologies();
        $techno5->setName('MySQL');
        $techno5->setSlug('mysql');
        $manager->persist($techno5);

        $manager->flush();
    }
}
