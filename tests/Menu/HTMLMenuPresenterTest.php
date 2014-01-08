<?php

use JustMenu\Menu\Components\Category;
use JustMenu\Menu\Components\Item;

class HTMLMenuPresenterTest extends TestCase {

	public function setUp()
	{
		$this->category = new Category;
		$this->category->title = 'foo';
		$this->category->description = 'bar';
		$this->category->info = 'baz';

		$this->item = new Item;
		$this->item->title = 'foo';
		$this->item->description = 'bar';
		$this->item->info = 'baz';
	}

	public function testTrue()
	{
		$this->assertTrue(true);

	}


	//public function testMenu()
	//{
		//$menu = new Menu;
		//$this->category->add($this->item);
		//$menu->add($this->category);

		//$presenter = new HTMLMenuPresenter($menu);
		//$output = $presenter->show();

		//$this->assertXmlStringEqualsXmlString('<JustMenu><Category><title>foo</title><description>bar</description><info>baz</info><Item><title>foo</title><description>bar</description><info>baz</info></Item></Category></JustMenu>', $output);
	//}

	
	//public function testCategory()
	//{
		//$presenter = new HTMLMenuPresenter($this->category);
		//$output = $presenter->show();

		//$this->assertXmlStringEqualsXmlString('<Category><title>foo</title><description>bar</description><info>baz</info></Category>', $output);
	//}

	//public function testCategoryWithItem()
	//{
		//$this->category->add($this->item);

		//$presenter = new HTMLMenuPresenter($this->category);
		//$output = $presenter->show();

		//$this->assertXmlStringEqualsXmlString('<Category><title>foo</title><description>bar</description><info>baz</info><Item><title>foo</title><description>bar</description><info>baz</info></Item></Category>', $output);
	//}

}
