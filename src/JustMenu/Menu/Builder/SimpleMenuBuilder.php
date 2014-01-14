<?php namespace JustMenu\Menu\Builder;

use JustMenu\Menu\Menu;
use JustMenu\Menu\Entity\Category;
use JustMenu\Menu\Entity\Item;
use JustMenu\Menu\Entity\Size;

class SimpleMenuBuilder extends MenuBuilder {

	public function assembleMenu()
	{
		$menu = new Menu;

		$cat1 = new Category;
		$cat1->title = 'Chow Fun';
		$cat1->description = 'rice noodle';
		$cat1->info = 'comes with white rice';
		$cat1->addSize(new Size(6.99, 'quart', 'Qt.'));

		$item1 = new Item($cat1);
		$item1->title = 'Vegetable Chow Fun';
		$item1->description = 'item1 descripton';
		$item1->info = 'addl info';

		$item2 = new Item($cat1);
		$item2->title = 'Roast Pork Chow Fun';
		$item2->description = 'item2 descripton';
		$item2->info = 'addl info';

		$cat1->addItem($item1);
		$cat1->addItem($item2);
		$menu->addCategory($cat1);


		$cat2 = new Category;
		$cat2->title = 'Lo Mein';
		$cat2->description = 'soft noodle';
		$cat2->info = 'comes with soda';
		$cat2->addSize(new Size(4.45, 'pint', 'Pt.'));
		$cat2->addSize(new Size(6.85, 'quart', 'Qt.'));

		$item1 = new Item($cat2);
		$item1->title = 'Plain Lo Mein';
		$item1->description = 'item1 descripton';
		$item1->info = 'addl info';

		$item2 = new Item($cat2);
		$item2->title = 'Vegetable Lo Mein';
		$item2->description = 'item2 descripton';
		$item2->info = 'addl info';
		$item2->addSize(new Size(5.30, 'pint', 'Pt.'));

		$cat2->addItem($item1);
		$cat2->addItem($item2);
		$menu->addCategory($cat2);

		return $menu;
	}

}
