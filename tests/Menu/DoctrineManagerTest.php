<?php namespace JustMenu\Tests\Menu;

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Menu\DoctrineManager;

class DoctrineManagerTest extends TestCase
{
    public function setUp()
    {
        $this->manager = new DoctrineManager(m::mock('Doctrine\ORM\EntityManager'));
    }

    public function testCanAssembleCategoriesByIndex()
    {
        $this->manager->getEntityManager()
            ->shouldReceive('getRepository')
            ->once()
            ->with('JustMenu\Menu\Entity\Category')
            ->andReturn($repository = m::mock('repository'));

        $repository->shouldReceive('findBy')->with(array(), array('indexed_order' => 'ASC'))->andReturn(array('category'));

        $this->assertSame(array('category'), $this->manager->assembleOrderedCategories());
    }

}
