<?php namespace JustMenu\Menu;

use Doctrine\ORM\EntityManager;

class DoctrineManager implements ManagerInterface
{
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function assembleOrderedCategories()
    {
        $categoryRepository = $this->entityManager->getRepository('JustMenu\Menu\Entity\Category');

         return $categoryRepository->findBy(array(), array('indexed_order' => 'ASC'));
    }

    /**
     * Gets the value of $entityManager
     *
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }
}
