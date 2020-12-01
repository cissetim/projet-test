<?php

namespace App\DataFixtures;

use App\Entity\Maraude;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; ++$i){

            $maraude = new Maraude();
            $maraude->setNom($faker->name);
            $maraude->setAdresse($faker->text);
            $maraude->setOrganisme($faker->name);
            $maraude->setImageFilename($faker->imageUrl());
            $maraude->setType($faker->name);
            $maraude->setDescription($faker->text);
            
            $manager->persist($maraude);
        }
            $manager->flush();
    }
}
