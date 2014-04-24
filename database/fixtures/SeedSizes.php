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
        $size = new Size('2.50', 'small', 'Sm.');
        $size->menu_component = $this->getReference('appetizer');
        $manager->persist($size);

        $size = new Size('5.50', 'large', 'Lg.');
        $size->menu_component = $this->getReference('appetizer');
        $manager->persist($size);

        $size = new Size('1.75', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('side order');
        $manager->persist($size);

        $size = new Size('2.85', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('side order');
        $manager->persist($size);

        $size = new Size('1.75', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('soup');
        $manager->persist($size);
        
        $size = new Size('2.85', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('soup');
        $manager->persist($size);

        $size = new Size('3.85', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('fried rice');
        $manager->persist($size);
        
        $size = new Size('6.45', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('fried rice');
        $manager->persist($size);

        $size = new Size('3.75', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('chow mein');
        $manager->persist($size);
        
        $size = new Size('6.75', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('chow mein');
        $manager->persist($size);

        $size = new Size('3.75', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('chop suey');
        $manager->persist($size);
        
        $size = new Size('6.75', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('chop suey');
        $manager->persist($size);

        $size = new Size('6.55', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('egg foo young');
        $manager->persist($size);

        $size = new Size('4.45', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('lo mein');
        $manager->persist($size);
        
        $size = new Size('6.85', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('lo mein');
        $manager->persist($size);

        $size = new Size('6.99', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('chow fun');
        $manager->persist($size);

        $size = new Size('4.85', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('pork');
        $manager->persist($size);
        
        $size = new Size('8.15', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('pork');
        $manager->persist($size);

        $size = new Size('5.05', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('chicken');
        $manager->persist($size);
        
        $size = new Size('8.45', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('chicken');
        $manager->persist($size);

        $size = new Size('5.45', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('beef');
        $manager->persist($size);
        
        $size = new Size('8.95', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('beef');
        $manager->persist($size);

        $size = new Size('6.25', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('seafood');
        $manager->persist($size);
        
        $size = new Size('9.95', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('seafood');
        $manager->persist($size);

        $size = new Size('5.25', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('sweet & sour');
        $manager->persist($size);
        
        $size = new Size('8.05', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('sweet & sour');
        $manager->persist($size);

        $size = new Size('6.75', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('vegetable');
        $manager->persist($size);
        
        $size = new Size('9.15', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('health food section');
        $manager->persist($size);

        $size = new Size('1.75', 'small', 'Sm.');
        $size->menu_component = $this->getReference('childrens section');
        $manager->persist($size);
        
        $size = new Size('2.95', 'large', 'Lg.');
        $size->menu_component = $this->getReference('childrens section');
        $manager->persist($size);

        $size = new Size('9.25', 'special', 'Sp.');
        $size->menu_component = $this->getReference('chefs special');
        $manager->persist($size);

        $size = new Size('6.55', 'combo', 'Cm.');
        $size->menu_component = $this->getReference('dinner combo');
        $manager->persist($size);

        $size = new Size('4.75', 'special', 'Sp.');
        $size->menu_component = $this->getReference('lunch');
        $manager->persist($size);
        
        $size = new Size('5.45', 'combo', 'Cm.');
        $size->menu_component = $this->getReference('lunch');
        $manager->persist($size);

        $size = new Size('1.00', 'can', 'can');
        $size->menu_component = $this->getReference('drinks');
        $manager->persist($size);
        
        $size = new Size('1.75', '20oz', '20oz');
        $size->menu_component = $this->getReference('drinks');
        $manager->persist($size);

        $size = new Size('2.50', '2 liter', '2 liter');
        $size->menu_component = $this->getReference('drinks');
        $manager->persist($size);

        $size = new Size('6.75', 'pint', 'Pt.');
        $size->menu_component = $this->getReference('specials');
        $manager->persist($size);

        $size = new Size('9.75', 'quart', 'Qt.');
        $size->menu_component = $this->getReference('specials');
        $manager->persist($size);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedCategories', 'SeedItems');
    }
}
