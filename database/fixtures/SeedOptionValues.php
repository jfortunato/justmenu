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
        $value->setOption($this->getReference('rice'));
        $value->setTitle('white rice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('rice'));
        $value->setTitle('plain fried rice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('rice'));
        $value->setTitle('vegetable fried rice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('rice'));
        $value->setTitle('roast pork fried rice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('rice'));
        $value->setTitle('chicken fried rice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('rice'));
        $value->setTitle('beef fried rice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('rice'));
        $value->setTitle('shrimp fried rice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('rice'));
        $value->setTitle('special fried rice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('rice'));
        $value->setTitle('lobster fried rice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('rice'));
        $value->setTitle('brown rice');
        $value->setDefaultPrice(1.50);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('lo mein option'));
        $value->setTitle('vegetable lo mein');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('lo mein option'));
        $value->setTitle('roast pork lo mein');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('lo mein option'));
        $value->setTitle('chicken lo mein');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('lo mein option'));
        $value->setTitle('shrimp lo mein');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('lo mein option'));
        $value->setTitle('beef lo mein');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('lo mein option'));
        $value->setTitle('house special lo mein');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('roll'));
        $value->setTitle('egg roll');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('roll'));
        $value->setTitle('shrimp roll');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('roll'));
        $value->setTitle('pizza roll');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('roll'));
        $value->setTitle('spring roll');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('broccoli');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('onion');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('scallion');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('garlic');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('ginger');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('chinese cabbage');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('peas');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('cashew nut');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('peanut');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('mushroom');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('tofu');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('bean curd');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('cabbage');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('snow pea');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('green pepper');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('baby corn');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('water chestnut');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('carrots');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('string bean');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('vegetables'));
        $value->setTitle('celery');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('taste'));
        $value->setTitle('extra spicy');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('taste'));
        $value->setTitle('spice');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('taste'));
        $value->setTitle('steamed');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('taste'));
        $value->setTitle('brown sauce');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('taste'));
        $value->setTitle('garlic sauce');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('taste'));
        $value->setTitle('white sauce');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('taste'));
        $value->setTitle('curry sauce');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('taste'));
        $value->setTitle('general tsos sauce');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('taste'));
        $value->setTitle('black bean sauce');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('pork');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('chicken');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('beef');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('jumbo shrimp');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('scallop');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('white meat');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('egg');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('baby shrimp');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('crabmeat');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('meat'));
        $value->setTitle('lobster');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('soup or soda option'));
        $value->setTitle('Wonton Soup');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('soup or soda option'));
        $value->setTitle('Egg Drop Soup');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('soup or soda option'));
        $value->setTitle('Hot & Sour Soup');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('soup or soda option'));
        $value->setTitle('Chicken Rice Soup');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('soup or soda option'));
        $value->setTitle('Pepsi');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('soup or soda option'));
        $value->setTitle('Orange');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('soup or soda option'));
        $value->setTitle('Iced Tea');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        $value = new OptionValue;
        $value->setOption($this->getReference('soup or soda option'));
        $value->setTitle('Root Beer');
        $value->setDefaultPrice(0.00);
        $manager->persist($value);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedOptions');
    }
}
