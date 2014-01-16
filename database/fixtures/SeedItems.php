<?php

use Doctrine\Common\Persistence\ObjectManager;
use JustMenu\Menu\Entity\Item;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeedItems extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $item = new Item;
        $item->category = $this->getReference('chow fun');
        $item->title = 'Vegetable Chow Fun';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow fun');
        $item->title = 'Roast Pork Chow Fun';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lo mein');
        $item->title = 'Plain Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lo mein');
        $item->title = 'Vegetable Lo Mein';
        $item->description = '';
        $item->info = '';
        $this->addReference('veggie lo mein', $item);
        $manager->persist($item);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedCategories');
    }
}
