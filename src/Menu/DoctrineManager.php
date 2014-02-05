<?php namespace JustMenu\Menu;

use Doctrine\ORM\EntityManager;

class DoctrineManager implements ManagerInterface
{
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function assembleCategoriesByIndex()
    {
        $categoryRepository = $this->entityManager->getRepository('JustMenu\Menu\Entity\Category');

         return $categoryRepository->findBy(array(), array('indexed_order' => 'ASC'));
    }

    public function getOptionsAsJson()
    {
        $qp = $this->entityManager->createQueryBuilder();
        $result = $qp->select(array('o', 'v'))
            ->from('JustMenu\Menu\Entity\Option', 'o')
            ->leftJoin('o.values', 'v')
            ->getQuery()->getArrayResult();


        return json_encode($result);
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
