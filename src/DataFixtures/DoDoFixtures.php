<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\DoDo;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
class DoDoFixtures extends Fixture implements DependentFixtureInterface
{
    private $faker;

    public function __construct(){
        $this->faker=Factory::create("fr_FR");
 }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<10;$i++){
            $DoDo = new DoDo();
            $DoDo->setDateExecution($this->faker->dateTime())
            ->setResultTest($this->faker->numberBetween(0,20))
            ->setTest($this->getReference('test'.mt_rand(0,9)))
            ->setUser($this->getReference('user'.mt_rand(0,9)));
            $this->addReference('DoDo'.$i, $DoDo);
            $manager->persist($DoDo);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
            TestFixtures::class,
        ];
    }
}