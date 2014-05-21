<?php

use Doctrine\Common\Persistence\ObjectManager;
use JustMenu\Menu\Entity\SpecialTime;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeedSpecialTimes extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $time = new SpecialTime;
        $time->setDays('[]');
        $time->setTimes('1500');
        $time->setMenuComponent($this->getReference('lunch'));
        $manager->persist($time);

        $time = new SpecialTime;
        $time->setDays('[1, 2, 3, 4, 5, 6]');
        $time->setTimes('');
        $time->setMenuComponent($this->getReference('egg roll'));
        $manager->persist($time);

        $time = new SpecialTime;
        $time->setDays('[]');
        $time->setTimes('1100-1600');
        $time->setMenuComponent($this->getReference('specials'));
        $manager->persist($time);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedCategories');
    }
}
