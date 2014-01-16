<?php

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Faker\ORM\Doctrine\Populator;

class SeedFakerData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $generator = Factory::create();
        $populator = new Populator($generator, $manager);

        $populator->addEntity('\JustMenu\Menu\Entity\Category', 2, array(
            'title' => function() use ($generator) { return $generator->sentence(2); },
            'description' => function() use ($generator) { return $generator->sentence(4); },
        ));

        $populator->addEntity('\JustMenu\Menu\Entity\Item', 4);

        $populator->addEntity('\JustMenu\Menu\Entity\Size', 4, array(
            'size' => function() use ($generator) { return $generator->word(); },
            'size_short' => function() use ($generator) { return $generator->word(); },
            'price' => function() use ($generator) { return $generator->randomFloat(2, 1, 15); },
        ));

        // uncomment to run
        //$insertedPKs = $populator->execute();
    }
}
