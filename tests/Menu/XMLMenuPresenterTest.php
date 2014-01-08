<?php

use JustMenu\Menu\Components\Category;
use JustMenu\Menu\XMLMenuPresenter;
use JustMenu\Menu\Components\Item;
use JustMenu\Menu\Components\Menu;

class XMLMenuPresenterTest extends TestCase {

	public function setUp()
	{
		$this->menu = new Menu;

		$this->category = new Category;
		$this->category->title = 'foo';
		$this->category->description = 'bar';
		$this->category->info = 'baz';

		$this->item = new Item;
		$this->item->title = 'foo';
		$this->item->description = 'bar';
		$this->item->info = 'baz';
	}

	public function testMenu()
	{
		$menu = new Menu;
		$this->category->add($this->item);
		$menu->add($this->category);

		$presenter = new XMLMenuPresenter($menu);

		$this->assertXmlStringEqualsXmlString('<JustMenu><Category><title>foo</title><description>bar</description><info>baz</info><Item><title>foo</title><description>bar</description><info>baz</info></Item></Category></JustMenu>', $presenter->render());
	}

	
	public function testCategory()
	{
		$presenter = new XMLMenuPresenter($this->category);

		$this->assertXmlStringEqualsXmlString('<Category><title>foo</title><description>bar</description><info>baz</info></Category>', $presenter->render());
	}

	public function testCategoryWithItem()
	{
		$this->category->add($this->item);

		$presenter = new XMLMenuPresenter($this->category);

		$this->assertXmlStringEqualsXmlString('<Category><title>foo</title><description>bar</description><info>baz</info><Item><title>foo</title><description>bar</description><info>baz</info></Item></Category>', $presenter->render());
	}


	public function testItem()
	{
		$presenter = new XMLMenuPresenter($this->item);

		$this->assertXmlStringEqualsXmlString('<Item><title>foo</title><description>bar</description><info>baz</info></Item>', $presenter->render());
	}

}
