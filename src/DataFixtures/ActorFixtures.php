<?php

// src/DataFixtures/ActorFixtures.php 

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(objectManager $manager)
    {
        for ($i = 1; $i <= 50; $i++) {  
            $actors = new Actor();  
            $actors->setName('Nom' . $i);  
            $manager->persist($actors);  
        }  
        $manager->flush();
    }

    public function getDependencies()  
    {
        return [ProgramFixtures::class];  
    }
}
