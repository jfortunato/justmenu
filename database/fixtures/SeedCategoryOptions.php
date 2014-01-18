<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use JustMenu\Menu\Entity\CategoryOption;

class SeedCategoryOptions extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categoryOption = new CategoryOption;
        $categoryOption->category = $this->getReference('lo mein');
        $categoryOption->option = $this->getReference('rice');
        $categoryOption->required = false;
        $manager->persist($categoryOption);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedOptions', 'SeedCategories');
    }
}
