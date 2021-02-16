<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 75; $i++) {
            $produit = new Produit;
            $produit
              ->setName($faker->word())
              ->setPicture($faker->imageUrl)
              ->setDescription($faker->text)
              ->setPromo($faker->boolean($chanceOfGettingTrue = 50))
              ->setCreated($faker->dateTimeBetween($startDate = '-1 years',$endDate = 'now',$timezone = null));
      
            $manager->persist($produit);
        }

        $manager->flush();
    
    }
}
