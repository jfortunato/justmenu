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
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Egg Roll');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);
        $this->addReference('egg roll', $item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Shrimp Roll');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Pizza Roll');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Spring Roll (2)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Shrimp Toast (4)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Fantail Shrimp (2)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Fried Wonton (10)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Cheese Wonton (10)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Fried Chicken Wings (6)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('BBQ Spare Ribs');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Boneless Spare Ribs');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setChoice($this->getReference('steamed or fried dumplings'));
        $item->setTitle('Steamed Dumplings');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setChoice($this->getReference('steamed or fried dumplings'));
        $item->setTitle('Fried Dumplings');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setChoice($this->getReference('steamed or fried vegetable dumplings'));
        $item->setTitle('Steamed Vegetable Dumplings');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setChoice($this->getReference('steamed or fried vegetable dumplings'));
        $item->setTitle('Fried Vegetable Dumplings');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setChoice($this->getReference('steamed or fried chicken dumplings'));
        $item->setTitle('Steamed Chicken Dumplings');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setChoice($this->getReference('steamed or fried chicken dumplings'));
        $item->setTitle('Fried Chicken Dumplings');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Chinese Pizza (6)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Beef Teriyaki (4)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Appetizer Combo');
        $item->setDescription('');
        $item->setInfo('(2) Fantail Shrimp (2) Egg Rolls (2) Wings (2) Spare Ribs (2) Shrimp Toast');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Chicken Teriyaki (4)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Sesame Balls (8)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('appetizer'));
        $item->setTitle('Buffalo Wings (12)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('side order'));
        $item->setTitle('Brown Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('side order'));
        $item->setTitle('White Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('side order'));
        $item->setTitle('Fortune Cookies (8)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('side order'));
        $item->setTitle('Crispy Noodles');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('side order'));
        $item->setTitle('Almond Cookies (3)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('side order'));
        $item->setTitle('Tea Bag (6)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Wonton Soup');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Wonton Egg Drop Mix');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Egg Drop Soup');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Chicken Noodle Soup');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Chicken Rice Soup');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Vegetable Soup');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Hot & Sour Soup');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Subgum Wonton Soup');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Pork Yat Gai Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('soup'));
        $item->setTitle('Seafood Soup');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('fried rice'));
        $item->setTitle('Plain Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('fried rice'));
        $item->setTitle('Vegetable Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('fried rice'));
        $item->setTitle('Roast Pork Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('fried rice'));
        $item->setTitle('Chicken Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('fried rice'));
        $item->setTitle('Beef Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('fried rice'));
        $item->setTitle('Shrimp Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('fried rice'));
        $item->setTitle('Special Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('fried rice'));
        $item->setTitle('Lobster Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow mein'));
        $item->setTitle('Vegetable Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow mein'));
        $item->setTitle('Roast Pork Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow mein'));
        $item->setTitle('Chicken Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow mein'));
        $item->setTitle('Shrimp Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow mein'));
        $item->setTitle('Beef Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow mein'));
        $item->setTitle('Lobster Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow mein'));
        $item->setTitle('House Special Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chop suey'));
        $item->setTitle('Vegetable Chop Suey');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chop suey'));
        $item->setTitle('Roast Pork Chop Suey');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chop suey'));
        $item->setTitle('Chicken Chop Suey');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chop suey'));
        $item->setTitle('Shrimp Chop Suey');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chop suey'));
        $item->setTitle('Beef Chop Suey');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chop suey'));
        $item->setTitle('Lobster Chop Suey');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chop suey'));
        $item->setTitle('House Special Chop Suey');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('egg foo young'));
        $item->setTitle('Vegetable Egg Foo Young');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('egg foo young'));
        $item->setTitle('Roast Pork Egg Foo Young');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('egg foo young'));
        $item->setTitle('Shrimp Egg Foo Young');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('egg foo young'));
        $item->setTitle('Chicken Egg Foo Young');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('egg foo young'));
        $item->setTitle('Beef Egg Foo Young');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lo mein'));
        $item->setTitle('Plain Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lo mein'));
        $item->setTitle('Vegetable Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lo mein'));
        $item->setTitle('Roast Pork Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lo mein'));
        $item->setTitle('Shrimp Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lo mein'));
        $item->setTitle('Beef Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lo mein'));
        $item->setTitle('Chicken Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lo mein'));
        $item->setTitle('House Special Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow fun'));
        $item->setTitle('Vegetable Chow Fun');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow fun'));
        $item->setTitle('Roast Pork Chow Fun');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow fun'));
        $item->setTitle('Chicken Chow Fun');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow fun'));
        $item->setTitle('Beef Chow Fun');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow fun'));
        $item->setTitle('Shrimp Chow Fun');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow fun'));
        $item->setTitle('House Special Chow Fun');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chow fun'));
        $item->setTitle('Singapore Chow Fun');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('pork'));
        $item->setTitle('Roast Pork w/ Chinese Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('pork'));
        $item->setTitle('Roast Pork w/ Mushrooms');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('pork'));
        $item->setTitle('Roast Pork w/ Snow Peas');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('pork'));
        $item->setTitle('Roast Pork w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('pork'));
        $item->setTitle('Moo Shu Pork (w/ 5 Pancakes)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('pork'));
        $item->setTitle('Hunan Pork');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('pork'));
        $item->setTitle('Szechuan Pork');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('pork'));
        $item->setTitle('Pork w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Chicken w/ Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Moo Goo Gai Pan');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Chicken w/ Snow Peas');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Chicken w/ String Bean');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Boneless Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Lemon Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Curry Chicken w/ Onions');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Chicken w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Chicken w/ Black Bean Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Chicken w/ Cashew Nuts');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Kung Po Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Hunan Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Chicken w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Szechuan Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Moo Shu Chicken (w/ 5 Pancakes)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Chicken w/ Mushrooms');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Black Pepper Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chicken'));
        $item->setTitle('Bourbon Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Pepper Steak w/ Onion');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Beef w/ Chinese Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Beef w/ Mushroom');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Beef w/ Snow Peas');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Beef w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Beef w/ Black Bean Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Hunan Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Szechuan Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Beef w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Hot & Spicy Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Moo Shu Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('beef'));
        $item->setTitle('Beef w/ Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w/ Lobster Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w/ Chinese Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w/ Mushroom');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Curry Shrimp w/ Onions');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w/ Snow Peas');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Szechuan Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w. Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w/ Black Bean Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w/ Cashew Nuts');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w/ Scallops w/ Cream Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Hot & Spicy Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Kung Po Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Hunan Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Moo Shu Shrimp (w/ 5 pancakes)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Scallop w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp & Scallop w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('seafood'));
        $item->setTitle('Shrimp w/ Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('sweet & sour'));
        $item->setTitle('Sweet & Sour Pork');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('sweet & sour'));
        $item->setTitle('Sweet & Sour Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('sweet & sour'));
        $item->setTitle('Sweet & Sour Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('sweet & sour'));
        $item->setTitle('Sweet & Sour Combination');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('vegetable'));
        $item->setTitle('Broccoli w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('vegetable'));
        $item->setTitle('Buddhist Delight (mixed vegetable)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('vegetable'));
        $item->setTitle('Bean Curd Home Style');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('vegetable'));
        $item->setTitle('Garlic Sauce w/ String Bean');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('vegetable'));
        $item->setTitle('Broccoli Tofu w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('vegetable'));
        $item->setTitle('Moo Shu Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('health food section'));
        $item->setTitle('Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('health food section'));
        $item->setTitle('Chicken w/ Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('health food section'));
        $item->setTitle('Shrimp w/ Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('health food section'));
        $item->setTitle('Chicken & Shrimp w/ Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('health food section'));
        $item->setTitle('Beef & Shrimp w/ Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setTitle('French Fries');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setTitle('Chinese Donut (order)');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setTitle('Chicken Wing w/ French Fries');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setTitle('Sweet & Sour Chicken w/ French Fries');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setTitle('Sweet & Sour Pork w/ French Fries');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setTitle('Sweet & Sour Shrimp w/ French Fries');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setChoice($this->getReference('wings w/ pork or chicken fried rice'));
        $item->setTitle('Wings w/ Pork Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setChoice($this->getReference('wings w/ pork or chicken fried rice'));
        $item->setTitle('Wings w/ Chicken Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setChoice($this->getReference('wings w/ shrimp or beef fried rice'));
        $item->setTitle('Wings w/ Shrimp Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setChoice($this->getReference('wings w/ shrimp or beef fried rice'));
        $item->setTitle('Wings w/ Beef Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setChoice($this->getReference('wings w/ vegetable or plain fried rice'));
        $item->setTitle('Wings w/ Vegetable Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('childrens section'));
        $item->setChoice($this->getReference('wings w/ vegetable or plain fried rice'));
        $item->setTitle('Wings w/ Plain Fried Rice');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Seafood Delight');
        $item->setDescription('Lobster, Scallop, Shrimp, & Sea Stick w/ mixed Vegetable in chefs special white sauce.');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Three Kings Seafood');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Happy Family');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Hunan Triple');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('General Tsos Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setChoice($this->getReference('sesame chicken or beef'));
        $item->setTitle('Sesame Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setChoice($this->getReference('sesame chicken or beef'));
        $item->setTitle('Sesame Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setChoice($this->getReference('orange flavor chicken or beef'));
        $item->setTitle('Orange Flavor Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setChoice($this->getReference('orange flavor chicken or beef'));
        $item->setTitle('Orange Flavor Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Dragon and Phoenix');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Hunan Royal');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Four Seasons');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Triple Szechuan Style');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Diced Chicken & Shrimp Combination');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Sizzling Beef & Scallops');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Triple Delight');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('Szechuan Royal');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('General Tsos Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('chefs special'));
        $item->setTitle('General Tsos Tofu');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('shrimp or beef chow mein'));
        $item->setTitle('Shrimp Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('shrimp or beef chow mein'));
        $item->setTitle('Beef Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('chicken or pork chow mein'));
        $item->setTitle('Chicken Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('chicken or pork chow mein'));
        $item->setTitle('Pork Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Pepper Steak');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('hunan beef or shrimp'));
        $item->setTitle('Hunan Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('hunan beef or shrimp'));
        $item->setTitle('Hunan Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('hunan pork or chicken'));
        $item->setTitle('Hunan Pork');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('hunan pork or chicken'));
        $item->setTitle('Hunan Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('szechuan pork or chicken'));
        $item->setTitle('Szechuan Pork');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('szechuan pork or chicken'));
        $item->setTitle('Szechuan Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('szechuan beef or shrimp'));
        $item->setTitle('Szechuan Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('szechuan beef or shrimp'));
        $item->setTitle('Szechuan Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Chicken w/ Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Shrimp w/ Mixed Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('sweet & sour pork or chicken'));
        $item->setTitle('Sweet & Sour Pork');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('sweet & sour pork or chicken'));
        $item->setTitle('Sweet & Sour Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Sweet & Sour Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Moo Goo Gai Pan');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Chicken w/ Snow Peas');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('chicken or pork w/ broccoli'));
        $item->setTitle('Chicken w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('chicken or pork w/ broccoli'));
        $item->setTitle('Pork w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('shrimp or beef w/ broccoli'));
        $item->setTitle('Shrimp w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('shrimp or beef w/ broccoli'));
        $item->setTitle('Beef w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Roast Pork w/ Chinese Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('chicken or pork lo mein'));
        $item->setTitle('Chicken Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('chicken or pork lo mein'));
        $item->setTitle('Pork Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('shrimp or beef lo mein'));
        $item->setTitle('Shrimp Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('shrimp or beef lo mein'));
        $item->setTitle('Beef Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Shrimp w/ Lobster Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Barbecued Spare Ribs');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Boneless Spare Ribs');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('pork or chicken w/ garlic sauce'));
        $item->setTitle('Pork w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('pork or chicken w/ garlic sauce'));
        $item->setTitle('Chicken w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('shrimp or beef w/ garlic sauce'));
        $item->setTitle('Shrimp w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setChoice($this->getReference('shrimp or beef w/ garlic sauce'));
        $item->setTitle('Beef w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('General Tsos Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Sesame Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Kung Po Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Cashew Nuts Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('General Tsos Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Chicken w/ String Bean');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Broccoli Tofu w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('dinner combo'));
        $item->setTitle('Black Pepper Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Moo Goo Gai Pan');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('chicken or pork w/ garlic sauce'));
        $item->setTitle('Chicken w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('chicken or pork w/ garlic sauce'));
        $item->setTitle('Pork w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('beef or shrimp w/ garlic sauce'));
        $item->setTitle('Beef w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('beef or shrimp w/ garlic sauce'));
        $item->setTitle('Shrimp w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Chicken w/ Cashew Nuts');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('hunan chicken or pork'));
        $item->setTitle('Hunan Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('hunan chicken or pork'));
        $item->setTitle('Hunan Pork');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('hunan shrimp or beef'));
        $item->setTitle('Hunan Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('hunan shrimp or beef'));
        $item->setTitle('Hunan Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('roast pork or chicken lo mein'));
        $item->setTitle('Roast Pork Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('roast pork or chicken lo mein'));
        $item->setTitle('Chicken Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('beef or shrimp lo mein'));
        $item->setTitle('Beef Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('beef or shrimp lo mein'));
        $item->setTitle('Shrimp Lo Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Roast Pork w/ Chinese Vegetable');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('sweet & sour chicken or pork'));
        $item->setTitle('Sweet & Sour Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('sweet & sour chicken or pork'));
        $item->setTitle('Sweet & Sour Pork');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Sweet & Sour Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Pepper Steak');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('beef or shrimp chow mein'));
        $item->setTitle('Beef Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('beef or shrimp chow mein'));
        $item->setTitle('Shrimp Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('pork or chicken chow mein'));
        $item->setTitle('Pork Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('pork or chicken chow mein'));
        $item->setTitle('Chicken Chow Mein');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('beef or shrimp w/ broccoli'));
        $item->setTitle('Beef w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('beef or shrimp w/ broccoli'));
        $item->setTitle('Shrimp w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('pork or chicken w/ broccoli'));
        $item->setTitle('Pork w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('pork or chicken w/ broccoli'));
        $item->setTitle('Chicken w/ Broccoli');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Kung Po Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Shrimp w/ Lobster Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Chicken w/ Snow Peas');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('szechuan shrimp or beef'));
        $item->setTitle('Szechuan Shrimp');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('szechuan shrimp or beef'));
        $item->setTitle('Szechuan Beef');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('szechuan chicken or pork'));
        $item->setTitle('Szechuan Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setChoice($this->getReference('szechuan chicken or pork'));
        $item->setTitle('Szechuan Pork');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('General Tsos Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Broccoli w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('String Bean w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Broccoli Tofu w/ Garlic Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Sesame Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('lunch'));
        $item->setTitle('Mixed Vegetables w/ Brown Sauce');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('drinks'));
        $item->setTitle('Orange Soda');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('drinks'));
        $item->setTitle('Root Beer');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('drinks'));
        $item->setTitle('Iced Tea');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('drinks'));
        $item->setTitle('Pepsi');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('drinks'));
        $item->setTitle('Home Made Iced Tea');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);


        $item = new Item;
        $item->setCategory($this->getReference('specials'));
        $item->setTitle('Coconut Chicken');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('specials'));
        $item->setTitle('Coconut Shrimp ');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        $item = new Item;
        $item->setCategory($this->getReference('specials'));
        $item->setTitle('Hibachi Chicken ');
        $item->setDescription('');
        $item->setInfo('');
        $manager->persist($item);

        // uncomment to run
        $manager->flush();
    }

    public function getDependencies()
    {
        return array('SeedCategories', 'SeedChoices');
    }
}
