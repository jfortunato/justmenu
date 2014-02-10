<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use JustMenu\Menu\Entity\MenuComponentOption;

class SeedMenuComponentOptions extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('lo mein');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('lo mein');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $manager->persist($menuComponentOption);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedOptions', 'SeedCategories');
    }
}
