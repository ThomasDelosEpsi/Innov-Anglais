<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Subscribe;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $faker;
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher){
        $this->faker=Factory::create("fr_FR");
        $this->passwordHasher= $passwordHasher;
 }

    public function load(ObjectManager $manager): void
    {
        for($j=0;$j<3;$j++){
            $subscribe = new Subscribe();
            $choix=array('mensuel', 'annuel', 'trimestriel');
            $prices = array(20, 110, 55);
            $subscribe->setTypeSubscribe($this->$choix[$j])
            ->setPrice($this->$prices[$j]);
            $manager->persist($subscribe);


        }

        for($i=0;$i<10;$i++){
            


            $user = new User();
            $user->setLastname($this->faker->lastName())
            ->setFirstname($this->faker->firstName())
            ->setPhone($this->faker->mobileNumber())
            ->setSex($this->faker->boolean())
            ->setPaymentMethod($this->faker->numberBetween(1,4))
            ->setRoles(array('ROLE_USER'))
            ->setEmail(strtolower($user->getFirstname()).'.'.strtolower($user->getLastname()).'@'.$this->faker->freeEmailDomain())
            ->setPassword($this->passwordHasher->hashPassword($user, strtolower($user->getFirstname())))
            ->setCompany($this->faker->getReference('company'.mt_rand(0,9)))
            ->setSubscribe($this->$subscribe[mt_rand(0,2)]);

            $this->addReference('user'.$i, $user);
            $manager->persist($user);
        }
        $manager->flush();
    }
}