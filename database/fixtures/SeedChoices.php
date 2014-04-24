<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use JustMenu\Menu\Entity\Choice;

class SeedChoices extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $choice = new Choice;
        $choice->title = 'Steamed or Fried Dumplings';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('steamed or fried dumplings', $choice);

        $choice = new Choice;
        $choice->title = 'Steamed or Fried Vegetable Dumplings';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('steamed or fried vegetable dumplings', $choice);

        $choice = new Choice;
        $choice->title = 'Steamed or Fried Chicken Dumplings';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('steamed or fried chicken dumplings', $choice);

        $choice = new Choice;
        $choice->title = 'Wings w/ Pork or Chicken Fried Rice';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('wings w/ pork or chicken fried rice', $choice);

        $choice = new Choice;
        $choice->title = 'Wings w/ Shrimp or Beef Fried Rice';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('wings w/ shrimp or beef fried rice', $choice);

        $choice = new Choice;
        $choice->title = 'Wings w/ Vegetable or Plain Fried Rice';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('wings w/ vegetable or plain fried rice', $choice);

        $choice = new Choice;
        $choice->title = 'Sesame Chicken or Beef';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('sesame chicken or beef', $choice);

        $choice = new Choice;
        $choice->title = 'Orange Flavor Chicken or Beef';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('orange flavor chicken or beef', $choice);

        $choice = new Choice;
        $choice->title = 'Shrimp or Beef Chow Mein';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('shrimp or beef chow mein', $choice);

        $choice = new Choice;
        $choice->title = 'Chicken or pork chow mein';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('chicken or pork chow mein', $choice);

        $choice = new Choice;
        $choice->title = 'Hunan Beef or Shrimp';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('hunan beef or shrimp', $choice);

        $choice = new Choice;
        $choice->title = 'hunan pork or chicken';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('hunan pork or chicken', $choice);
        
        $choice = new Choice;
        $choice->title = 'Szechuan Pork or Chicken';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('szechuan pork or chicken', $choice);

        $choice = new Choice;
        $choice->title = 'Szechuan Beef or Shrimp';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('szechuan beef or shrimp', $choice);

        $choice = new Choice;
        $choice->title = 'Sweet & Sour Pork or Chicken';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('sweet & sour pork or chicken', $choice);

        $choice = new Choice;
        $choice->title = 'Chicken or Pork w/ Broccoli';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('chicken or pork w/ broccoli', $choice);

        $choice = new Choice;
        $choice->title = 'Shrimp or Beef w/ Broccoli';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('shrimp or beef w/ broccoli', $choice);

        $choice = new Choice;
        $choice->title = 'Chicken or Pork Lo Mein';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('chicken or pork lo mein', $choice);

        $choice = new Choice;
        $choice->title = 'Shrimp or Beef Lo Mein';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('shrimp or beef lo mein', $choice);

        $choice = new Choice;
        $choice->title = 'Pork or Chicken w/ Garlic Sauce';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('pork or chicken w/ garlic sauce', $choice);

        $choice = new Choice;
        $choice->title = 'Shrimp or Beef w/ Garlic Sauce';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('shrimp or beef w/ garlic sauce', $choice);

        $choice = new Choice;
        $choice->title = 'Chicken or Pork w/ Garlic Sauce';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('chicken or pork w/ garlic sauce', $choice);

        $choice = new Choice;
        $choice->title = 'Beef or Shrimp w/ Garlic Sauce';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('beef or shrimp w/ garlic sauce', $choice);

        $choice = new Choice;
        $choice->title = 'Hunan Chicken or Pork';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('hunan chicken or pork', $choice);

        $choice = new Choice;
        $choice->title = 'Hunan Shrimp or Beef';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('hunan shrimp or beef', $choice);

        $choice = new Choice;
        $choice->title = 'Roast Pork or Chicken Lo Mein';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('roast pork or chicken lo mein', $choice);

        $choice = new Choice;
        $choice->title = 'Beef or Shrimp Lo Mein';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('beef or shrimp lo mein', $choice);

        $choice = new Choice;
        $choice->title = 'Sweet & Sour Chicken or Pork';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('sweet & sour chicken or pork', $choice);

        $choice = new Choice;
        $choice->title = 'Beef or Shrimp Chow Mein';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('beef or shrimp chow mein', $choice);

        $choice = new Choice;
        $choice->title = 'Pork or Chicken Chow Mein';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('pork or chicken chow mein', $choice);

        $choice = new Choice;
        $choice->title = 'Beef or Shrimp w/ Broccoli';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('beef or shrimp w/ broccoli', $choice);

        $choice = new Choice;
        $choice->title = 'Pork or Chicken w/ Broccoli';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('pork or chicken w/ broccoli', $choice);

        $choice = new Choice;
        $choice->title = 'Szechuan Shrimp or Beef';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('szechuan shrimp or beef', $choice);

        $choice = new Choice;
        $choice->title = 'Szechuan Chicken or Pork';
        $choice->description = '';
        $choice->info = '';
        $manager->persist($choice);
        $this->addReference('szechuan chicken or pork', $choice);

        // uncomment to run
        $manager->flush();
    }
}
