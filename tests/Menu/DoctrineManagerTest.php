<?php

use Mockery as m;
use JustMenu\Menu\DoctrineManager;

class DoctrineManagerTest extends TestCase
{
    public function setUp()
    {
        $this->manager = new DoctrineManager(m::mock('Doctrine\ORM\EntityManager'));
    }

    public function testCanAssembleCategories()
    {
        $this->manager->getEntityManager()
            ->shouldReceive('getRepository')
            ->once()
            ->with('JustMenu\Menu\Entity\Category')
            ->andReturn($repository = m::mock('repository'));

        $repository->shouldReceive('findAll')->andReturn(array('category'));

        $this->assertSame(array('category'), $this->manager->assembleCategories());
    }

}
