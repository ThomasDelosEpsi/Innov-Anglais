<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Category;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
class CategoryFixtures extends Fixture
{
    private $faker;

    public function __construct(){
        $this->faker=Factory::create("fr_FR");
        
 }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<10;$i++){
            $categories = new Category();
            $categories->setNameCategory($this->faker->word());
            $this->addReference('category'.$i, $categories);
            $manager->persist($categories);
        }
        $manager->flush();
    }
}