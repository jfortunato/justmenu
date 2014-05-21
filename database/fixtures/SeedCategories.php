<?php

use Doctrine\Common\Persistence\ObjectManager;
use JustMenu\Menu\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;

class SeedCategories extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category;
        $category->setTitle('Appetizer');
        $category->setDescription('');
        $category->setInfo('');
        $category->setIndexedOrder(0);
        $manager->persist($category);
        $this->addReference('appetizer', $category);

        $category = new Category;
        $category->setTitle('Side Order');
        $category->setDescription('');
        $category->setInfo('');
        $category->setIndexedOrder(1);
        $manager->persist($category);
        $this->addReference('side order', $category);

        $category = new Category;
        $category->setTitle('Soup');
        $category->setDescription('');
        $category->setInfo('Comes w/ Crispy Noodles');
        $category->setIndexedOrder(2);
        $manager->persist($category);
        $this->addReference('soup', $category);

        $category = new Category;
        $category->setTitle('Fried Rice');
        $category->setDescription('');
        $category->setInfo('');
        $category->setIndexedOrder(3);
        $manager->persist($category);
        $this->addReference('fried rice', $category);

        $category = new Category;
        $category->setTitle('Chow Mein');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice & Crispy Noodles');
        $category->setIndexedOrder(4);
        $manager->persist($category);
        $this->addReference('chow mein', $category);

        $category = new Category;
        $category->setTitle('Chop Suey');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice & crispy noodles');
        $category->setIndexedOrder(5);
        $manager->persist($category);
        $this->addReference('chop suey', $category);


        $category = new Category;
        $category->setTitle('Egg Foo Young');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice');
        $category->setIndexedOrder(6);
        $manager->persist($category);
        $this->addReference('egg foo young', $category);

        $category = new Category;
        $category->setTitle('Lo Mein');
        $category->setDescription('soft noodle');
        $category->setInfo('');
        $category->setIndexedOrder(7);
        $manager->persist($category);
        $this->addReference('lo mein', $category);

        $category = new Category;
        $category->setTitle('Chow Fun');
        $category->setDescription('rice noodle');
        $category->setInfo('');
        $category->setIndexedOrder(8);
        $manager->persist($category);
        $this->addReference('chow fun', $category);

        $category = new Category;
        $category->setTitle('Pork');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice');
        $category->setIndexedOrder(9);
        $manager->persist($category);
        $this->addReference('pork', $category);

        $category = new Category;
        $category->setTitle('Chicken');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice');
        $category->setIndexedOrder(10);
        $manager->persist($category);
        $this->addReference('chicken', $category);

        $category = new Category;
        $category->setTitle('Beef');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice');
        $category->setIndexedOrder(11);
        $manager->persist($category);
        $this->addReference('beef', $category);

        $category = new Category;
        $category->setTitle('Seafood');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice');
        $category->setIndexedOrder(12);
        $manager->persist($category);
        $this->addReference('seafood', $category);

        $category = new Category;
        $category->setTitle('Sweet & Sour');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice');
        $category->setIndexedOrder(13);
        $manager->persist($category);
        $this->addReference('sweet & sour', $category);

        $category = new Category;
        $category->setTitle('Vegetable');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice');
        $category->setIndexedOrder(14);
        $manager->persist($category);
        $this->addReference('vegetable', $category);

        $category = new Category;
        $category->setTitle('Health Food Section');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice');
        $category->setIndexedOrder(15);
        $manager->persist($category);
        $this->addReference('health food section', $category);

        $category = new Category;
        $category->setTitle('Childrens Section');
        $category->setDescription('');
        $category->setInfo('');
        $category->setIndexedOrder(16);
        $manager->persist($category);
        $this->addReference('childrens section', $category);

        $category = new Category;
        $category->setTitle('Chefs Special');
        $category->setDescription('');
        $category->setInfo('Comes w/ white rice');
        $category->setIndexedOrder(17);
        $manager->persist($category);
        $this->addReference('chefs special', $category);

        $category = new Category;
        $category->setTitle('Dinner Combo');
        $category->setDescription('');
        $category->setInfo('Comes w/ pork fried rice & egg roll');
        $category->setIndexedOrder(18);
        $manager->persist($category);
        $this->addReference('dinner combo', $category);

        $category = new Category;
        $category->setTitle('Lunch');
        $category->setDescription('Served until 3pm');
        $category->setInfo('Combo comes with soup or can soda');
        $category->setIndexedOrder(19);
        $manager->persist($category);
        $this->addReference('lunch', $category);

        $category = new Category;
        $category->setTitle('Drinks');
        $category->setDescription('');
        $category->setInfo('');
        $category->setIndexedOrder(20);
        $manager->persist($category);
        $this->addReference('drinks', $category);

        $category = new Category;
        $category->setTitle('Specials');
        $category->setDescription('');
        $category->setInfo('');
        $category->setIndexedOrder(21);
        $manager->persist($category);
        $this->addReference('specials', $category);

        // uncomment to run
        $manager->flush();
    }
}
