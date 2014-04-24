<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use JustMenu\Menu\Entity\Option;

class SeedOptions extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $option = new Option;
        $option->title = 'Rice';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 0;
        $manager->persist($option);
        $this->addReference('rice', $option);

        $option = new Option;
        $option->title = 'Lo Mein';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 0;
        $manager->persist($option);
        $this->addReference('lo mein option', $option);

        $option = new Option;
        $option->title = 'Roll';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 0;
        $manager->persist($option);
        $this->addReference('roll', $option);

        $option = new Option;
        $option->title = 'Vegetables';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 1;
        $manager->persist($option);
        $this->addReference('vegetables', $option);

        $option = new Option;
        $option->title = 'Taste';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 1;
        $manager->persist($option);
        $this->addReference('taste', $option);

        $option = new Option;
        $option->title = 'Meat';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 1;
        $manager->persist($option);
        $this->addReference('meat', $option);

        $option = new Option;
        $option->title = 'Soup or Soda';
        $option->description = '';
        $option->info = '';
        $option->choice_mode = 0;
        $manager->persist($option);
        $this->addReference('soup or soda option', $option);

        // uncomment to run
        $manager->flush();
    }
}
