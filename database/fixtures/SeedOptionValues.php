<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use JustMenu\Menu\Entity\OptionValue;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeedOptionValues extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'white rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'plain fried rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'vegetable fried rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'roast pork fried rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'chicken fried rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'beef fried rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'shrimp fried rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'special fried rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'lobster fried rice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('rice');
        $value->title = 'brown rice';
        $value->default_price = 1.50;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('lo mein option');
        $value->title = 'vegetable lo mein';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('lo mein option');
        $value->title = 'roast pork lo mein';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('lo mein option');
        $value->title = 'chicken lo mein';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('lo mein option');
        $value->title = 'shrimp lo mein';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('lo mein option');
        $value->title = 'beef lo mein';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('lo mein option');
        $value->title = 'house special lo mein';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('roll');
        $value->title = 'egg roll';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('roll');
        $value->title = 'shrimp roll';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('roll');
        $value->title = 'pizza roll';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('roll');
        $value->title = 'spring roll';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'broccoli';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'onion';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'scallion';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'garlic';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'ginger';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'chinese cabbage';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'peas';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'cashew nut';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'peanut';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'mushroom';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'tofu';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'bean curd';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'cabbage';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'snow pea';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'green pepper';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'baby corn';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'water chestnut';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'carrots';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'string bean';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('vegetables');
        $value->title = 'celery';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('taste');
        $value->title = 'extra spicy';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('taste');
        $value->title = 'spice';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('taste');
        $value->title = 'steamed';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('taste');
        $value->title = 'brown sauce';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('taste');
        $value->title = 'garlic sauce';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('taste');
        $value->title = 'white sauce';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('taste');
        $value->title = 'curry sauce';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('taste');
        $value->title = 'general tsos sauce';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('taste');
        $value->title = 'black bean sauce';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'pork';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'chicken';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'beef';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'jumbo shrimp';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'scallop';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'white meat';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'egg';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'baby shrimp';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'crabmeat';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('meat');
        $value->title = 'lobster';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('soup or soda option');
        $value->title = 'Wonton Soup';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('soup or soda option');
        $value->title = 'Egg Drop Soup';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('soup or soda option');
        $value->title = 'Hot & Sour Soup';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('soup or soda option');
        $value->title = 'Chicken Rice Soup';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('soup or soda option');
        $value->title = 'Pepsi';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('soup or soda option');
        $value->title = 'Orange';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('soup or soda option');
        $value->title = 'Iced Tea';
        $value->default_price = 0.00;
        $manager->persist($value);

        $value = new OptionValue;
        $value->option = $this->getReference('soup or soda option');
        $value->title = 'Root Beer';
        $value->default_price = 0.00;
        $manager->persist($value);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedOptions');
    }
}
