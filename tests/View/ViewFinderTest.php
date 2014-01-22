<?php namespace JustMenu\Tests\View;

use JustMenu\Tests\TestCase;
use JustMenu\View\ViewFinder;

class ViewTest extends TestCase
{
    public function testCanFetchView()
    {
        $view = new ViewFinder;

        $this->assertSame('Hello World', $view->fetch(__DIR__.'/fixtures/hello.php'));
    }
}
