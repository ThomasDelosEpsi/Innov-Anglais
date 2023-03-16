<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Company;
class CompanyFixtures extends Fixture
{
    private $faker;

    public function __construct(){
        $this->faker=Factory::create("fr_FR");
 }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<10;$i++){
            $company = new Company();
            $company->setNameCompany($this->faker->company())
            ->setPhoneCompany($this->faker->phoneNumber())
            ->setMailCompany(strtolower(str_replace(' ', '_', $company->getNameCompany())).'@'.$this->faker->freeEmailDomain());
            $this->addReference('company'.$i, $company);
            $manager->persist($company);
        }
        $manager->flush();
    }
}