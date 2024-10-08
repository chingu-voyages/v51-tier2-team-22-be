<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach ([
            'Tochi',
            'Afrah',
            'Fari',
            'Muideen',
            'cash_53',
            'Digi-nomad-94',
            'Jordi',
            'User 1',
            'User 2',
            'User 3',
        ] as $name) {
            $user = new User();
            $user->setName($name);
            $manager->persist($user);
        }

        $manager->flush();
    }
}
