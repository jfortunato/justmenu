<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use JustMenu\Menu\Entity\Option;

class SeedOptions extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $option = new Option;
        $option->title = 'Rice';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 0;
        $manager->persist($option);
        $this->addReference('rice', $option);

        $option = new Option;
        $option->title = 'Vegetables';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 1;
        $manager->persist($option);
        $this->addReference('vegetables', $option);

        $option = new Option;
        $option->title = 'Taste';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 0;
        $manager->persist($option);
        $this->addReference('taste', $option);

        // uncomment to run
        $manager->flush();
    }
}
