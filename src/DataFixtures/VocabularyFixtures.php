<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Vocabulary;
use Symfony\Component\Translation\TranslatableMessage;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
class VocabularyFixtures extends Fixture implements DependentFixtureInterface
{
    private $faker;

    public function __construct(){
        $this->faker=Factory::create("fr_FR");
        
 }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<30;$i++){
            $vocabulary = new Vocabulary();
            $vocabulary->setNameVocabulary($this->faker->Word())
            ->setTranslateWord($this->trad($vocabulary->getNameVocabulary()))
            ->setCategory($this->getReference('category'.mt_rand(0,9)));   
            $this->addReference('vocabulary'.$i, $vocabulary);
            $manager->persist($vocabulary);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }

    public function trad($word){
        $message = new TransLatableMessage($word);
        return $message;
    }
}