<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Test;
class TestFixtures extends Fixture
{
    private $faker;

    public function __construct(){
        $this->faker=Factory::create("fr_FR");
 }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<10;$i++){
            $test = new Test();
            $test->setNameTest($this->faker->word())
            ->setIdTheme($this->getReference('theme'.mt_rand(0,9)));
            $this->addReference('test'.$i, $test);
            $manager->persist($test);
        }
        $manager->flush();
    }
}