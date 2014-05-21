<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use JustMenu\Menu\Entity\Choice;

class SeedChoices extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $choice = new Choice;
        $choice->setTitle('Steamed or Fried Dumplings');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('steamed or fried dumplings', $choice);

        $choice = new Choice;
        $choice->setTitle('Steamed or Fried Vegetable Dumplings');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('steamed or fried vegetable dumplings', $choice);

        $choice = new Choice;
        $choice->setTitle('Steamed or Fried Chicken Dumplings');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('steamed or fried chicken dumplings', $choice);

        $choice = new Choice;
        $choice->setTitle('Wings w/ Pork or Chicken Fried Rice');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('wings w/ pork or chicken fried rice', $choice);

        $choice = new Choice;
        $choice->setTitle('Wings w/ Shrimp or Beef Fried Rice');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('wings w/ shrimp or beef fried rice', $choice);

        $choice = new Choice;
        $choice->setTitle('Wings w/ Vegetable or Plain Fried Rice');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('wings w/ vegetable or plain fried rice', $choice);

        $choice = new Choice;
        $choice->setTitle('Sesame Chicken or Beef');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('sesame chicken or beef', $choice);

        $choice = new Choice;
        $choice->setTitle('Orange Flavor Chicken or Beef');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('orange flavor chicken or beef', $choice);

        $choice = new Choice;
        $choice->setTitle('Shrimp or Beef Chow Mein');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('shrimp or beef chow mein', $choice);

        $choice = new Choice;
        $choice->setTitle('Chicken or pork chow mein');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('chicken or pork chow mein', $choice);

        $choice = new Choice;
        $choice->setTitle('Hunan Beef or Shrimp');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('hunan beef or shrimp', $choice);

        $choice = new Choice;
        $choice->setTitle('hunan pork or chicken');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('hunan pork or chicken', $choice);
        
        $choice = new Choice;
        $choice->setTitle('Szechuan Pork or Chicken');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('szechuan pork or chicken', $choice);

        $choice = new Choice;
        $choice->setTitle('Szechuan Beef or Shrimp');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('szechuan beef or shrimp', $choice);

        $choice = new Choice;
        $choice->setTitle('Sweet & Sour Pork or Chicken');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('sweet & sour pork or chicken', $choice);

        $choice = new Choice;
        $choice->setTitle('Chicken or Pork w/ Broccoli');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('chicken or pork w/ broccoli', $choice);

        $choice = new Choice;
        $choice->setTitle('Shrimp or Beef w/ Broccoli');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('shrimp or beef w/ broccoli', $choice);

        $choice = new Choice;
        $choice->setTitle('Chicken or Pork Lo Mein');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('chicken or pork lo mein', $choice);

        $choice = new Choice;
        $choice->setTitle('Shrimp or Beef Lo Mein');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('shrimp or beef lo mein', $choice);

        $choice = new Choice;
        $choice->setTitle('Pork or Chicken w/ Garlic Sauce');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('pork or chicken w/ garlic sauce', $choice);

        $choice = new Choice;
        $choice->setTitle('Shrimp or Beef w/ Garlic Sauce');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('shrimp or beef w/ garlic sauce', $choice);

        $choice = new Choice;
        $choice->setTitle('Chicken or Pork w/ Garlic Sauce');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('chicken or pork w/ garlic sauce', $choice);

        $choice = new Choice;
        $choice->setTitle('Beef or Shrimp w/ Garlic Sauce');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('beef or shrimp w/ garlic sauce', $choice);

        $choice = new Choice;
        $choice->setTitle('Hunan Chicken or Pork');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('hunan chicken or pork', $choice);

        $choice = new Choice;
        $choice->setTitle('Hunan Shrimp or Beef');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('hunan shrimp or beef', $choice);

        $choice = new Choice;
        $choice->setTitle('Roast Pork or Chicken Lo Mein');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('roast pork or chicken lo mein', $choice);

        $choice = new Choice;
        $choice->setTitle('Beef or Shrimp Lo Mein');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('beef or shrimp lo mein', $choice);

        $choice = new Choice;
        $choice->setTitle('Sweet & Sour Chicken or Pork');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('sweet & sour chicken or pork', $choice);

        $choice = new Choice;
        $choice->setTitle('Beef or Shrimp Chow Mein');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('beef or shrimp chow mein', $choice);

        $choice = new Choice;
        $choice->setTitle('Pork or Chicken Chow Mein');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('pork or chicken chow mein', $choice);

        $choice = new Choice;
        $choice->setTitle('Beef or Shrimp w/ Broccoli');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('beef or shrimp w/ broccoli', $choice);

        $choice = new Choice;
        $choice->setTitle('Pork or Chicken w/ Broccoli');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('pork or chicken w/ broccoli', $choice);

        $choice = new Choice;
        $choice->setTitle('Szechuan Shrimp or Beef');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('szechuan shrimp or beef', $choice);

        $choice = new Choice;
        $choice->setTitle('Szechuan Chicken or Pork');
        $choice->setDescription('');
        $choice->setInfo('');
        $manager->persist($choice);
        $this->addReference('szechuan chicken or pork', $choice);

        // uncomment to run
        $manager->flush();
    }
}
