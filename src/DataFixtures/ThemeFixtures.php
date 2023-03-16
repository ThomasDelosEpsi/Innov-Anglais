<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Theme;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
class ThemeFixtures extends Fixture
{
    private $faker;

    public function __construct(){
        $this->faker=Factory::create("fr_FR");
 }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<10;$i++){
            $theme = new Theme();
            $theme->setNameTheme($this->faker->word());
            $this->addReference('theme'.$i, $theme);
            $manager->persist($theme);
        }
        $manager->flush();
    }
}