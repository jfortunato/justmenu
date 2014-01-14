<?php

use Mockery as m;
use JustMenu\Menu\Entity\Category;

class CategoryTest extends TestCase
{
    public function setUp()
    {
        $this->category = new Category;
        $this->mockSizeSmall = m::mock('JustMenu\Menu\Entity\Size', array('2.55', 'small', 'Sm.'));
        $this->mockSizeLarge = m::mock('JustMenu\Menu\Entity\Size', array('5.00', 'large', 'Lg.'));
    }

    public function testGetAllLongSizes()
    {
        $this->category->addSize($this->mockSizeSmall);
        $this->category->addSize($this->mockSizeLarge);

        $this->assertSame(array('small', 'large'), $this->category->getAllLongSizes());
    }

    public function testGetAllShortSizes()
    {
        $this->category->addSize($this->mockSizeSmall);
        $this->category->addSize($this->mockSizeLarge);

        $this->assertSame(array('Sm.', 'Lg.'), $this->category->getAllShortSizes());
    }

    public function testGetAllShortSizesWithAbbreviated()
    {
        $this->category->addSize($this->mockSizeSmall);
        $this->category->addSize($this->mockSizeLarge);

        $this->assertSame(array('Sm.', 'Lg.'), $this->category->getAllShortSizes());
    }
}
