<?php namespace JustMenu\Repository\Category;

use JustMenu\Repository\EntityRepository;

class DoctrineCategoryRepository extends EntityRepository implements CategoryRepositoryInterface
{
    public function getCategoriesByOrder()
    {
         return $this->findBy(array(), array('indexed_order' => 'ASC'));
    }
}
