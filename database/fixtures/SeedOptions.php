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

        // uncomment to run
        $manager->flush();
    }
}
