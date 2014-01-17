<?php

use Doctrine\Common\Persistence\ObjectManager;
use JustMenu\Menu\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use JustMenu\Menu\Entity\Choice;

class SeedChoices extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $choice = new Choice;
        $choice->title = 'Steamed or Fried Dumplings';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('dumpling choice', $choice);

        // uncomment to run
        $manager->flush();
    }
}
