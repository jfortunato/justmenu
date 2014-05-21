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
        $size = new Size('', 'small', 'Sm.');
        $size->setMenuComponent($this->getReference('egg roll'));
        $manager->persist($size);

        $size = new Size('1.25', 'large', 'Lg.');
        $size->setMenuComponent($this->getReference('egg roll'));
        $manager->persist($size);

        $size = new Size('2.50', 'small', 'Sm.');
        $size->setMenuComponent($this->getReference('appetizer'));
        $manager->persist($size);

        $size = new Size('5.50', 'large', 'Lg.');
        $size->setMenuComponent($this->getReference('appetizer'));
        $manager->persist($size);

        $size = new Size('1.75', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('side order'));
        $manager->persist($size);

        $size = new Size('2.85', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('side order'));
        $manager->persist($size);

        $size = new Size('1.75', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('soup'));
        $manager->persist($size);
        
        $size = new Size('2.85', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('soup'));
        $manager->persist($size);

        $size = new Size('3.85', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('fried rice'));
        $manager->persist($size);
        
        $size = new Size('6.45', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('fried rice'));
        $manager->persist($size);

        $size = new Size('3.75', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('chow mein'));
        $manager->persist($size);
        
        $size = new Size('6.75', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('chow mein'));
        $manager->persist($size);

        $size = new Size('3.75', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('chop suey'));
        $manager->persist($size);
        
        $size = new Size('6.75', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('chop suey'));
        $manager->persist($size);

        $size = new Size('6.55', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('egg foo young'));
        $manager->persist($size);

        $size = new Size('4.45', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('lo mein'));
        $manager->persist($size);
        
        $size = new Size('6.85', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('lo mein'));
        $manager->persist($size);

        $size = new Size('6.99', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('chow fun'));
        $manager->persist($size);

        $size = new Size('4.85', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('pork'));
        $manager->persist($size);
        
        $size = new Size('8.15', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('pork'));
        $manager->persist($size);

        $size = new Size('5.05', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('chicken'));
        $manager->persist($size);
        
        $size = new Size('8.45', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('chicken'));
        $manager->persist($size);

        $size = new Size('5.45', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('beef'));
        $manager->persist($size);
        
        $size = new Size('8.95', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('beef'));
        $manager->persist($size);

        $size = new Size('6.25', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('seafood'));
        $manager->persist($size);
        
        $size = new Size('9.95', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('seafood'));
        $manager->persist($size);

        $size = new Size('5.25', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('sweet & sour'));
        $manager->persist($size);
        
        $size = new Size('8.05', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('sweet & sour'));
        $manager->persist($size);

        $size = new Size('6.75', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('vegetable'));
        $manager->persist($size);
        
        $size = new Size('9.15', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('health food section'));
        $manager->persist($size);

        $size = new Size('1.75', 'small', 'Sm.');
        $size->setMenuComponent($this->getReference('childrens section'));
        $manager->persist($size);
        
        $size = new Size('2.95', 'large', 'Lg.');
        $size->setMenuComponent($this->getReference('childrens section'));
        $manager->persist($size);

        $size = new Size('9.25', 'special', 'Sp.');
        $size->setMenuComponent($this->getReference('chefs special'));
        $manager->persist($size);

        $size = new Size('6.55', 'combo', 'Cm.');
        $size->setMenuComponent($this->getReference('dinner combo'));
        $manager->persist($size);

        $size = new Size('4.75', 'special', 'Sp.');
        $size->setMenuComponent($this->getReference('lunch'));
        $manager->persist($size);
        
        $size = new Size('5.45', 'combo', 'Cm.');
        $size->setMenuComponent($this->getReference('lunch'));
        $manager->persist($size);

        $size = new Size('1.00', 'can', 'can');
        $size->setMenuComponent($this->getReference('drinks'));
        $manager->persist($size);
        
        $size = new Size('1.75', '20oz', '20oz');
        $size->setMenuComponent($this->getReference('drinks'));
        $manager->persist($size);

        $size = new Size('2.50', '2 liter', '2 liter');
        $size->setMenuComponent($this->getReference('drinks'));
        $manager->persist($size);

        $size = new Size('6.75', 'pint', 'Pt.');
        $size->setMenuComponent($this->getReference('specials'));
        $manager->persist($size);

        $size = new Size('9.75', 'quart', 'Qt.');
        $size->setMenuComponent($this->getReference('specials'));
        $manager->persist($size);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedCategories', 'SeedItems');
    }
}
