<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Vocabulary;
class VocabularyFixtures extends Fixture
{
    private $faker;

    public function __construct(){
        $this->faker=Factory::create("fr_FR");
        
 }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<10;$i++){
            $vocabularies = new Vocabulary();
            $translateWord = new translate();
            $vocabularies->setNomVocabulaire($this->faker->Word());
            $this->addReference('vocabulary'.$i, $vocabularies);
            $translateWord->setTraduction($this->faker->Word());
            $this->addReference('translate'.$i, $translateWord);            
            $manager->persist($vocabularies);
        }
        $manager->flush();
    }
}