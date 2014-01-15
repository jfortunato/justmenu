<?php namespace JustMenu\Menu;

use Doctrine\ORM\EntityManager;

class DoctrineManager implements ManagerInterface
{
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function assembleCategories()
    {
        $categoryRepository = $this->entityManager->getRepository('JustMenu\Menu\Entity\Category');

         return $categoryRepository->findAll();
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
