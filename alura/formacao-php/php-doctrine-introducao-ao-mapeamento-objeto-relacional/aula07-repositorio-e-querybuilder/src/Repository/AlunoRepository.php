<?php

namespace Alura\Doctrine\Repository;

use Alura\Doctrine\Entity\Aluno;
use Doctrine\ORM\EntityRepository;

class AlunoRepository extends EntityRepository
{

    public function buscaCursoPorAluno()
    {
        /*$classeAluno = Aluno::class;
        $entityManager = $this->getEntityManager();
        $dql = "SELECT a, t, c FROM $classeAluno a JOIN a.telefones as t JOIN a.cursos as c";
        $query = $entityManager->createQuery($dql);*/

        $query = $this>$this->createQueryBuilder('a')
            ->join('a.telefones', 't')
            ->join('a.cursos', 'c')
            ->addSelect('t')
            ->addSelect('c')
            ->getQuery();


        return $query->getResult();
    }
}