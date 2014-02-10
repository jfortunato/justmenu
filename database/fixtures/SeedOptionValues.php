<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use JustMenu\Menu\Entity\OptionValue;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeedOptionValues extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'white rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'brown rice';
        $value->default_price = 1.50;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'carrots';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'tofu';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'onion';
        $value->default_price = 0.00;
        $manager->persist($value);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedOptions');
    }
}
