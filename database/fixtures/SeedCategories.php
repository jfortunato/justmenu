<?php

use Doctrine\Common\Persistence\ObjectManager;
use JustMenu\Menu\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;

class SeedCategories extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category;
        $category->title = 'Chow Fun';
        $category->description = 'rice noodle';
        $category->info = 'Comes with side of white rice';
        $category->indexed_order = 0;
        $manager->persist($category);
        $this->addReference('chow fun', $category);

        $category = new Category;
        $category->title = 'Lo Mein';
        $category->description = 'soft noodle';
        $category->info = 'Comes with a soda.';
        $category->indexed_order = 1;
        $manager->persist($category);
        $this->addReference('lo mein', $category);

        $category = new Category;
        $category->title = 'Lo Mein';
        $category->description = 'soft noodle';
        $category->info = 'Comes with a soda.';
        $category->indexed_order = 2;
        $manager->persist($category);

        $category = new Category;
        $category->title = 'Lo Mein';
        $category->description = 'soft noodle';
        $category->info = 'Comes with a soda.';
        $category->indexed_order = 3;
        $manager->persist($category);

        $category = new Category;
        $category->title = 'Lo Mein';
        $category->description = 'soft noodle';
        $category->info = 'Comes with a soda.';
        $category->indexed_order = 4;
        $manager->persist($category);

        $category = new Category;
        $category->title = 'Last';
        $category->description = 'soft noodle';
        $category->info = 'Comes with a soda.';
        $category->indexed_order = 5;
        $manager->persist($category);

        // uncomment to run
        $manager->flush();
    }
}
