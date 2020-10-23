<?php

namespace App\DataFixtures;

use App\Entity\Projects;
use Faker;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // On configure dans quelles langues nous voulons nos données
        $faker = Faker\Factory::create('fr_FR');

        // on créé 10 personnes
        for ($i = 0; $i < 10; $i++) {
            $project = new Projects();
            $project->setName($faker->company);
            $project->setDescription($faker->text($maxNbChars = 200) );
            $project->setImage('portfolio.png' );
            $project->setRepoUrl($faker->url);
            $project->setWebsiteUrl($faker->url);
            $project->setCreatedat($faker->dateTime($max = 'now', $timezone = null));
            $project->setUpdated($faker->dateTime($max = 'now', $timezone = null));
            $manager->persist($project);
        }

        $manager->flush();
    }
}