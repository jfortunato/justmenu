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
        $menuComponentOption->menu_component = $this->getReference('lunch');
        $menuComponentOption->option = $this->getReference('soup or soda option');
        $menuComponentOption->required = true;
        $menuComponentOption->size = 'combo';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('fried rice');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chow mein');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chow mein');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chow mein');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chow mein');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chop suey');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chop suey');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chop suey');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chop suey');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('egg foo young');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('egg foo young');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('egg foo young');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('egg foo young');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('lo mein');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('lo mein');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('lo mein');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chow fun');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chow fun');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chow fun');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('pork');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('pork');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('pork');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('pork');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chicken');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chicken');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chicken');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chicken');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('beef');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('beef');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('beef');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('beef');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('seafood');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('seafood');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('seafood');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('seafood');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('sweet & sour');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('sweet & sour');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('sweet & sour');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('vegetable');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('vegetable');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('vegetable');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('health food section');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('health food section');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('health food section');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('health food section');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('childrens section');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('childrens section');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('childrens section');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chefs special');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chefs special');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chefs special');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('chefs special');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('dinner combo');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('dinner combo');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('dinner combo');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('dinner combo');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('lunch');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('lunch');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('lunch');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('lunch');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('specials');
        $menuComponentOption->option = $this->getReference('rice');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('specials');
        $menuComponentOption->option = $this->getReference('vegetables');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('specials');
        $menuComponentOption->option = $this->getReference('taste');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->menu_component = $this->getReference('specials');
        $menuComponentOption->option = $this->getReference('meat');
        $menuComponentOption->required = false;
        $menuComponentOption->size = 'any';
        $manager->persist($menuComponentOption);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedOptions', 'SeedCategories', 'SeedItems');
    }
}
