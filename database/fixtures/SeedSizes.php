<?php

use Doctrine\Common\Persistence\ObjectManager;
use JustMenu\Menu\Entity\Item;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use JustMenu\Menu\Entity\Size;

class SeedSizes extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $size = new Size('3.99', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('chow fun');
        $manager->persist($size);

        $size = new Size('5.50', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('chow fun');
        $manager->persist($size);

        $size = new Size('3.99', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('lo mein');
        $manager->persist($size);

        $size = new Size('5.50', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('lo mein');
        $manager->persist($size);

        $size = new Size('4.45', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('veggie lo mein');
        $manager->persist($size);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedCategories', 'SeedItems');
    }
}
