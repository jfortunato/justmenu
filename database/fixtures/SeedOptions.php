<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use JustMenu\Menu\Entity\Option;

class SeedOptions extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $option = new Option;
        $option->setTitle('Rice');
        $option->setDescription('');
        $option->setInfo('');
        $option->setChoiceMode(0);
        $manager->persist($option);
        $this->addReference('rice', $option);

        $option = new Option;
        $option->setTitle('Lo Mein');
        $option->setDescription('');
        $option->setInfo('');
        $option->setChoiceMode(0);
        $manager->persist($option);
        $this->addReference('lo mein option', $option);

        $option = new Option;
        $option->setTitle('Roll');
        $option->setDescription('');
        $option->setInfo('');
        $option->setChoiceMode(0);
        $manager->persist($option);
        $this->addReference('roll', $option);

        $option = new Option;
        $option->setTitle('Vegetables');
        $option->setDescription('');
        $option->setInfo('');
        $option->setChoiceMode(1);
        $manager->persist($option);
        $this->addReference('vegetables', $option);

        $option = new Option;
        $option->setTitle('Taste');
        $option->setDescription('');
        $option->setInfo('');
        $option->setChoiceMode(1);
        $manager->persist($option);
        $this->addReference('taste', $option);

        $option = new Option;
        $option->setTitle('Meat');
        $option->setDescription('');
        $option->setInfo('');
        $option->setChoiceMode(1);
        $manager->persist($option);
        $this->addReference('meat', $option);

        $option = new Option;
        $option->setTitle('Soup or Soda');
        $option->setDescription('');
        $option->setInfo('');
        $option->setChoiceMode(0);
        $manager->persist($option);
        $this->addReference('soup or soda option', $option);

        // uncomment to run
        $manager->flush();
    }
}
