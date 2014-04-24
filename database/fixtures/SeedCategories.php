<?php

use Doctrine\Common\Persistence\ObjectManager;
use JustMenu\Menu\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;

class SeedCategories extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category;
        $category->title = 'Appetizer';
        $category->description = '';
        $category->info = '';
        $category->indexed_order = 0;
        $manager->persist($category);
        $this->addReference('appetizer', $category);

        $category = new Category;
        $category->title = 'Side Order';
        $category->description = '';
        $category->info = '';
        $category->indexed_order = 1;
        $manager->persist($category);
        $this->addReference('side order', $category);

        $category = new Category;
        $category->title = 'Soup';
        $category->description = '';
        $category->info = 'Comes w/ Crispy Noodles';
        $category->indexed_order = 2;
        $manager->persist($category);
        $this->addReference('soup', $category);

        $category = new Category;
        $category->title = 'Fried Rice';
        $category->description = '';
        $category->info = '';
        $category->indexed_order = 3;
        $manager->persist($category);
        $this->addReference('fried rice', $category);

        $category = new Category;
        $category->title = 'Chow Mein';
        $category->description = '';
        $category->info = 'Comes w/ white rice & Crispy Noodles';
        $category->indexed_order = 4;
        $manager->persist($category);
        $this->addReference('chow mein', $category);

        $category = new Category;
        $category->title = 'Chop Suey';
        $category->description = '';
        $category->info = 'Comes w/ white rice & crispy noodles';
        $category->indexed_order = 5;
        $manager->persist($category);
        $this->addReference('chop suey', $category);


        $category = new Category;
        $category->title = 'Egg Foo Young';
        $category->description = '';
        $category->info = 'Comes w/ white rice';
        $category->indexed_order = 6;
        $manager->persist($category);
        $this->addReference('egg foo young', $category);

        $category = new Category;
        $category->title = 'Lo Mein';
        $category->description = 'soft noodle';
        $category->info = '';
        $category->indexed_order = 7;
        $manager->persist($category);
        $this->addReference('lo mein', $category);

        $category = new Category;
        $category->title = 'Chow Fun';
        $category->description = 'rice noodle';
        $category->info = '';
        $category->indexed_order = 8;
        $manager->persist($category);
        $this->addReference('chow fun', $category);

        $category = new Category;
        $category->title = 'Pork';
        $category->description = '';
        $category->info = 'Comes w/ white rice';
        $category->indexed_order = 9;
        $manager->persist($category);
        $this->addReference('pork', $category);

        $category = new Category;
        $category->title = 'Chicken';
        $category->description = '';
        $category->info = 'Comes w/ white rice';
        $category->indexed_order = 10;
        $manager->persist($category);
        $this->addReference('chicken', $category);

        $category = new Category;
        $category->title = 'Beef';
        $category->description = '';
        $category->info = 'Comes w/ white rice';
        $category->indexed_order = 11;
        $manager->persist($category);
        $this->addReference('beef', $category);

        $category = new Category;
        $category->title = 'Seafood';
        $category->description = '';
        $category->info = 'Comes w/ white rice';
        $category->indexed_order = 12;
        $manager->persist($category);
        $this->addReference('seafood', $category);

        $category = new Category;
        $category->title = 'Sweet & Sour';
        $category->description = '';
        $category->info = 'Comes w/ white rice';
        $category->indexed_order = 13;
        $manager->persist($category);
        $this->addReference('sweet & sour', $category);

        $category = new Category;
        $category->title = 'Vegetable';
        $category->description = '';
        $category->info = 'Comes w/ white rice';
        $category->indexed_order = 14;
        $manager->persist($category);
        $this->addReference('vegetable', $category);

        $category = new Category;
        $category->title = 'Health Food Section';
        $category->description = '';
        $category->info = 'Comes w/ white rice';
        $category->indexed_order = 15;
        $manager->persist($category);
        $this->addReference('health food section', $category);

        $category = new Category;
        $category->title = 'Childrens Section';
        $category->description = '';
        $category->info = '';
        $category->indexed_order = 16;
        $manager->persist($category);
        $this->addReference('childrens section', $category);

        $category = new Category;
        $category->title = 'Chefs Special';
        $category->description = '';
        $category->info = 'Comes w/ white rice';
        $category->indexed_order = 17;
        $manager->persist($category);
        $this->addReference('chefs special', $category);

        $category = new Category;
        $category->title = 'Dinner Combo';
        $category->description = '';
        $category->info = 'Comes w/ pork fried rice & egg roll';
        $category->indexed_order = 18;
        $manager->persist($category);
        $this->addReference('dinner combo', $category);

        $category = new Category;
        $category->title = 'Lunch';
        $category->description = 'Served until 3pm';
        $category->info = 'Combo comes with soup or can soda';
        $category->indexed_order = 19;
        $manager->persist($category);
        $this->addReference('lunch', $category);

        $category = new Category;
        $category->title = 'Drinks';
        $category->description = '';
        $category->info = '';
        $category->indexed_order = 20;
        $manager->persist($category);
        $this->addReference('drinks', $category);

        $category = new Category;
        $category->title = 'Specials';
        $category->description = '';
        $category->info = '';
        $category->indexed_order = 21;
        $manager->persist($category);
        $this->addReference('specials', $category);

        // uncomment to run
        $manager->flush();
    }
}
