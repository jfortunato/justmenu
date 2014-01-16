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
        $manager->persist($category);
        $this->addReference('chow fun', $category);

        $category = new Category;
        $category->title = 'Lo Mein';
        $category->description = 'soft noodle';
        $category->info = 'Comes with a soda.';
        $manager->persist($category);
        $this->addReference('lo mein', $category);

        // uncomment to run
        $manager->flush();
    }
}
