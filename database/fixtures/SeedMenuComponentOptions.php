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
        $menuComponentOption->setMenuComponent($this->getReference('lunch'));
        $menuComponentOption->setOption($this->getReference('soup or soda option'));
        $menuComponentOption->setRequired(true);
        $menuComponentOption->setSize('combo');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('fried rice'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chow mein'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chow mein'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chow mein'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chow mein'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chop suey'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chop suey'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chop suey'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chop suey'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('egg foo young'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('egg foo young'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('egg foo young'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('egg foo young'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('lo mein'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('lo mein'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('lo mein'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chow fun'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chow fun'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chow fun'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('pork'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('pork'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('pork'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('pork'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chicken'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chicken'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chicken'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chicken'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('beef'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('beef'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('beef'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('beef'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('seafood'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('seafood'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('seafood'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('seafood'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('sweet & sour'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('sweet & sour'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('sweet & sour'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('vegetable'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('vegetable'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('vegetable'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('health food section'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('health food section'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('health food section'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('health food section'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('childrens section'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('childrens section'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('childrens section'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chefs special'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chefs special'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chefs special'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('chefs special'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('dinner combo'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('dinner combo'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('dinner combo'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('dinner combo'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('lunch'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('lunch'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('lunch'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('lunch'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('specials'));
        $menuComponentOption->setOption($this->getReference('rice'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('specials'));
        $menuComponentOption->setOption($this->getReference('vegetables'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('specials'));
        $menuComponentOption->setOption($this->getReference('taste'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        $menuComponentOption = new MenuComponentOption;
        $menuComponentOption->setMenuComponent($this->getReference('specials'));
        $menuComponentOption->setOption($this->getReference('meat'));
        $menuComponentOption->setRequired(false);
        $menuComponentOption->setSize('any');
        $manager->persist($menuComponentOption);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedOptions', 'SeedCategories', 'SeedItems');
    }
}
