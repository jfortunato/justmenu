<?php

use Mockery as m;
use JustMenu\Menu\SimpleMenuPresenter;

class SimpleMenuPresenterTest extends TestCase {

	public function testCategory()
	{
		//$category = m::mock('JustMenu\Menu\Components\Category');
		$category = new JustMenu\Menu\Components\Category;
		$category->title = 'foo';
		$category->description = 'bar';
		$category->info = 'baz';
		$category->addSize(6.99, 'quart', 'Qt.');

		$presenter = new SimpleMenuPresenter($category);
		$output = preg_replace('/\s*[ =-]*/', '', $presenter->show());
		$output = str_replace('<br>', '', $output);

		$this->assertSame('foo[Qt.]barbaz', $output);
	}

	public function testItem()
	{
		$item = m::mock('JustMenu\Menu\Components\Item');
		$item->shouldReceive('getAllPrices')->once()->andReturn(array());
		//$item = new JustMenu\Menu\Components\Item;
		$item->title = 'foo';
		$item->description = 'bar';
		$item->info = 'baz';

		$presenter = new SimpleMenuPresenter($item);
		$output = $presenter->show();
		$output = str_replace(array('&nbsp;', '<br>', ' ', '[]'), '', $output);

		$this->assertSame('foobarbaz', $output);
	}


}
