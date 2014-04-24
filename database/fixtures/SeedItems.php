<?php

use Doctrine\Common\Persistence\ObjectManager;
use JustMenu\Menu\Entity\Item;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeedItems extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Egg Roll';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Shrimp Roll';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Pizza Roll';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Spring Roll (2)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Shrimp Toast (4)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Fantail Shrimp (2)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Fried Wonton (10)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Cheese Wonton (10)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Fried Chicken Wings (6)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'BBQ Spare Ribs';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Boneless Spare Ribs';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->choice = $this->getReference('steamed or fried dumplings');
        $item->title = 'Steamed Dumplings';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->choice = $this->getReference('steamed or fried dumplings');
        $item->title = 'Fried Dumplings';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->choice = $this->getReference('steamed or fried vegetable dumplings');
        $item->title = 'Steamed Vegetable Dumplings';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->choice = $this->getReference('steamed or fried vegetable dumplings');
        $item->title = 'Fried Vegetable Dumplings';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->choice = $this->getReference('steamed or fried chicken dumplings');
        $item->title = 'Steamed Chicken Dumplings';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->choice = $this->getReference('steamed or fried chicken dumplings');
        $item->title = 'Fried Chicken Dumplings';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Chinese Pizza (6)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Beef Teriyaki (4)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Appetizer Combo';
        $item->description = '';
        $item->info = '(2) Fantail Shrimp (2) Egg Rolls (2) Wings (2) Spare Ribs (2) Shrimp Toast';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Chicken Teriyaki (4)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Sesame Balls (8)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('appetizer');
        $item->title = 'Buffalo Wings (12)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('side order');
        $item->title = 'Brown Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('side order');
        $item->title = 'White Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('side order');
        $item->title = 'Fortune Cookies (8)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('side order');
        $item->title = 'Crispy Noodles';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('side order');
        $item->title = 'Almond Cookies (3)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('side order');
        $item->title = 'Tea Bag (6)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Wonton Soup';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Wonton Egg Drop Mix';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Egg Drop Soup';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Chicken Noodle Soup';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Chicken Rice Soup';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Vegetable Soup';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Hot & Sour Soup';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Subgum Wonton Soup';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Pork Yat Gai Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('soup');
        $item->title = 'Seafood Soup';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('fried rice');
        $item->title = 'Plain Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('fried rice');
        $item->title = 'Vegetable Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('fried rice');
        $item->title = 'Roast Pork Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('fried rice');
        $item->title = 'Chicken Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('fried rice');
        $item->title = 'Beef Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('fried rice');
        $item->title = 'Shrimp Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('fried rice');
        $item->title = 'Special Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('fried rice');
        $item->title = 'Lobster Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow mein');
        $item->title = 'Vegetable Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow mein');
        $item->title = 'Roast Pork Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow mein');
        $item->title = 'Chicken Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow mein');
        $item->title = 'Shrimp Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow mein');
        $item->title = 'Beef Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow mein');
        $item->title = 'Lobster Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow mein');
        $item->title = 'House Special Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chop suey');
        $item->title = 'Vegetable Chop Suey';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chop suey');
        $item->title = 'Roast Pork Chop Suey';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chop suey');
        $item->title = 'Chicken Chop Suey';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chop suey');
        $item->title = 'Shrimp Chop Suey';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chop suey');
        $item->title = 'Beef Chop Suey';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chop suey');
        $item->title = 'Lobster Chop Suey';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chop suey');
        $item->title = 'House Special Chop Suey';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('egg foo young');
        $item->title = 'Vegetable Egg Foo Young';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('egg foo young');
        $item->title = 'Roast Pork Egg Foo Young';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('egg foo young');
        $item->title = 'Shrimp Egg Foo Young';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('egg foo young');
        $item->title = 'Chicken Egg Foo Young';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('egg foo young');
        $item->title = 'Beef Egg Foo Young';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lo mein');
        $item->title = 'Plain Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lo mein');
        $item->title = 'Vegetable Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lo mein');
        $item->title = 'Roast Pork Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lo mein');
        $item->title = 'Shrimp Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lo mein');
        $item->title = 'Beef Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lo mein');
        $item->title = 'Chicken Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lo mein');
        $item->title = 'House Special Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow fun');
        $item->title = 'Vegetable Chow Fun';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow fun');
        $item->title = 'Roast Pork Chow Fun';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow fun');
        $item->title = 'Chicken Chow Fun';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow fun');
        $item->title = 'Beef Chow Fun';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow fun');
        $item->title = 'Shrimp Chow Fun';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow fun');
        $item->title = 'House Special Chow Fun';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chow fun');
        $item->title = 'Singapore Chow Fun';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('pork');
        $item->title = 'Roast Pork w/ Chinese Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('pork');
        $item->title = 'Roast Pork w/ Mushrooms';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('pork');
        $item->title = 'Roast Pork w/ Snow Peas';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('pork');
        $item->title = 'Roast Pork w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('pork');
        $item->title = 'Moo Shu Pork (w/ 5 Pancakes)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('pork');
        $item->title = 'Hunan Pork';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('pork');
        $item->title = 'Szechuan Pork';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('pork');
        $item->title = 'Pork w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Chicken w/ Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Moo Goo Gai Pan';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Chicken w/ Snow Peas';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Chicken w/ String Bean';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Boneless Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Lemon Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Curry Chicken w/ Onions';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Chicken w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Chicken w/ Black Bean Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Chicken w/ Cashew Nuts';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Kung Po Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Hunan Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Chicken w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Szechuan Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Moo Shu Chicken (w/ 5 Pancakes)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Chicken w/ Mushrooms';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Black Pepper Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chicken');
        $item->title = 'Bourbon Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Pepper Steak w/ Onion';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Beef w/ Chinese Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Beef w/ Mushroom';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Beef w/ Snow Peas';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Beef w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Beef w/ Black Bean Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Hunan Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Szechuan Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Beef w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Hot & Spicy Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Moo Shu Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('beef');
        $item->title = 'Beef w/ Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w/ Lobster Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w/ Chinese Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w/ Mushroom';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Curry Shrimp w/ Onions';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w/ Snow Peas';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Szechuan Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w. Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w/ Black Bean Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w/ Cashew Nuts';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w/ Scallops w/ Cream Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Hot & Spicy Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Kung Po Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Hunan Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Moo Shu Shrimp (w/ 5 pancakes)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Scallop w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp & Scallop w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('seafood');
        $item->title = 'Shrimp w/ Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('sweet & sour');
        $item->title = 'Sweet & Sour Pork';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('sweet & sour');
        $item->title = 'Sweet & Sour Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('sweet & sour');
        $item->title = 'Sweet & Sour Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('sweet & sour');
        $item->title = 'Sweet & Sour Combination';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('vegetable');
        $item->title = 'Broccoli w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('vegetable');
        $item->title = 'Buddhist Delight (mixed vegetable)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('vegetable');
        $item->title = 'Bean Curd Home Style';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('vegetable');
        $item->title = 'Garlic Sauce w/ String Bean';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('vegetable');
        $item->title = 'Broccoli Tofu w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('vegetable');
        $item->title = 'Moo Shu Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('health food section');
        $item->title = 'Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('health food section');
        $item->title = 'Chicken w/ Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('health food section');
        $item->title = 'Shrimp w/ Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('health food section');
        $item->title = 'Chicken & Shrimp w/ Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('health food section');
        $item->title = 'Beef & Shrimp w/ Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->title = 'French Fries';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->title = 'Chinese Donut (order)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->title = 'Chicken Wing w/ French Fries';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->title = 'Sweet & Sour Chicken w/ French Fries';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->title = 'Sweet & Sour Pork w/ French Fries';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->title = 'Sweet & Sour Shrimp w/ French Fries';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->choice = $this->getReference('wings w/ pork or chicken fried rice');
        $item->title = 'Wings w/ Pork Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->choice = $this->getReference('wings w/ pork or chicken fried rice');
        $item->title = 'Wings w/ Chicken Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->choice = $this->getReference('wings w/ shrimp or beef fried rice');
        $item->title = 'Wings w/ Shrimp Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->choice = $this->getReference('wings w/ shrimp or beef fried rice');
        $item->title = 'Wings w/ Beef Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->choice = $this->getReference('wings w/ vegetable or plain fried rice');
        $item->title = 'Wings w/ Vegetable Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('childrens section');
        $item->choice = $this->getReference('wings w/ vegetable or plain fried rice');
        $item->title = 'Wings w/ Plain Fried Rice';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Seafood Delight: ( Lobster, Scallop,Shrimp & Sea Stick w mixed Vegetable in chefs special white sauce.)';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Three Kings Seafood';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Happy Family';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Hunan Triple';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'General Tsos Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->choice = $this->getReference('sesame chicken or beef');
        $item->title = 'Sesame Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->choice = $this->getReference('sesame chicken or beef');
        $item->title = 'Sesame Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->choice = $this->getReference('orange flavor chicken or beef');
        $item->title = 'Orange Flavor Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->choice = $this->getReference('orange flavor chicken or beef');
        $item->title = 'Orange Flavor Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Dragon and Phoenix';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Hunan Royal';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Four Seasons';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Triple Szechuan Style';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Diced Chicken & Shrimp Combination';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Sizzling Beef & Scallops';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Triple Delight';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'Szechuan Royal';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'General Tsos Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('chefs special');
        $item->title = 'General Tsos Tofu';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('shrimp or beef chow mein');
        $item->title = 'Shrimp Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('shrimp or beef chow mein');
        $item->title = 'Beef Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('chicken or pork chow mein');
        $item->title = 'Chicken Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('chicken or pork chow mein');
        $item->title = 'Pork Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Pepper Steak';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('hunan beef or shrimp');
        $item->title = 'Hunan Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('hunan beef or shrimp');
        $item->title = 'Hunan Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('hunan pork or chicken');
        $item->title = 'Hunan Pork';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('hunan pork or chicken');
        $item->title = 'Hunan Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('szechuan pork or chicken');
        $item->title = 'Szechuan Pork';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('szechuan pork or chicken');
        $item->title = 'Szechuan Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('szechuan beef or shrimp');
        $item->title = 'Szechuan Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('szechuan beef or shrimp');
        $item->title = 'Szechuan Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Chicken w/ Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Shrimp w/ Mixed Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('sweet & sour pork or chicken');
        $item->title = 'Sweet & Sour Pork';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('sweet & sour pork or chicken');
        $item->title = 'Sweet & Sour Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Sweet & Sour Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Moo Goo Gai Pan';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Chicken w/ Snow Peas';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('chicken or pork w/ broccoli');
        $item->title = 'Chicken w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('chicken or pork w/ broccoli');
        $item->title = 'Pork w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('shrimp or beef w/ broccoli');
        $item->title = 'Shrimp w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('shrimp or beef w/ broccoli');
        $item->title = 'Beef w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Roast Pork w/ Chinese Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('chicken or pork lo mein');
        $item->title = 'Chicken Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('chicken or pork lo mein');
        $item->title = 'Pork Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('shrimp or beef lo mein');
        $item->title = 'Shrimp Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('shrimp or beef lo mein');
        $item->title = 'Beef Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Shrimp w/ Lobster Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Barbecued Spare Ribs';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Boneless Spare Ribs';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('pork or chicken w/ garlic sauce');
        $item->title = 'Pork w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('pork or chicken w/ garlic sauce');
        $item->title = 'Chicken w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('shrimp or beef w/ garlic sauce');
        $item->title = 'Shrimp w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->choice = $this->getReference('shrimp or beef w/ garlic sauce');
        $item->title = 'Beef w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'General Tsos Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Sesame Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Kung Po Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Cashew Nuts Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'General Tsos Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Chicken w/ String Bean';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Broccoli Tofu w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('dinner combo');
        $item->title = 'Black Pepper Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Moo Goo Gai Pan';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('chicken or pork w/ garlic sauce');
        $item->title = 'Chicken w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('chicken or pork w/ garlic sauce');
        $item->title = 'Pork w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('beef or shrimp w/ garlic sauce');
        $item->title = 'Beef w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('beef or shrimp w/ garlic sauce');
        $item->title = 'Shrimp w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Chicken w/ Cashew Nuts';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('hunan chicken or pork');
        $item->title = 'Hunan Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('hunan chicken or pork');
        $item->title = 'Hunan Pork';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('hunan shrimp or beef');
        $item->title = 'Hunan Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('hunan shrimp or beef');
        $item->title = 'Hunan Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('roast pork or chicken lo mein');
        $item->title = 'Roast Pork Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('roast pork or chicken lo mein');
        $item->title = 'Chicken Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('beef or shrimp lo mein');
        $item->title = 'Beef Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('beef or shrimp lo mein');
        $item->title = 'Shrimp Lo Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Roast Pork w/ Chinese Vegetable';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('sweet & sour chicken or pork');
        $item->title = 'Sweet & Sour Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('sweet & sour chicken or pork');
        $item->title = 'Sweet & Sour Pork';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Sweet & Sour Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Pepper Steak';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('beef or shrimp chow mein');
        $item->title = 'Beef Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('beef or shrimp chow mein');
        $item->title = 'Shrimp Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('pork or chicken chow mein');
        $item->title = 'Pork Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('pork or chicken chow mein');
        $item->title = 'Chicken Chow Mein';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('beef or shrimp w/ broccoli');
        $item->title = 'Beef w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('beef or shrimp w/ broccoli');
        $item->title = 'Shrimp w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('pork or chicken w/ broccoli');
        $item->title = 'Pork w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('pork or chicken w/ broccoli');
        $item->title = 'Chicken w/ Broccoli';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Kung Po Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Shrimp w/ Lobster Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Chicken w/ Snow Peas';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('szechuan shrimp or beef');
        $item->title = 'Szechuan Shrimp';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('szechuan shrimp or beef');
        $item->title = 'Szechuan Beef';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('szechuan chicken or pork');
        $item->title = 'Szechuan Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->choice = $this->getReference('szechuan chicken or pork');
        $item->title = 'Szechuan Pork';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'General Tsos Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Broccoli w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'String Bean w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Broccoli Tofu w/ Garlic Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Sesame Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('lunch');
        $item->title = 'Mixed Vegetables w/ Brown Sauce';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('drinks');
        $item->title = 'Orange Soda';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('drinks');
        $item->title = 'Root Beer';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('drinks');
        $item->title = 'Iced Tea';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('drinks');
        $item->title = 'Pepsi';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('drinks');
        $item->title = 'Home Made Iced Tea';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);


        $item = new Item;
        $item->category = $this->getReference('specials');
        $item->title = 'Coconut Chicken';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('specials');
        $item->title = 'Coconut Shrimp ';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        $item = new Item;
        $item->category = $this->getReference('specials');
        $item->title = 'Hibachi Chicken ';
        $item->description = '';
        $item->info = '';
        $manager->persist($item);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedCategories', 'SeedChoices');
    }
}
