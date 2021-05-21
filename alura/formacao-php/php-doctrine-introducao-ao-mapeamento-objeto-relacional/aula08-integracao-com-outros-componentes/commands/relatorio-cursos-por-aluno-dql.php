<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$debuStack = new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debuStack);

$classeAluno = Aluno::class;
$dql = "SELECT a, t, c FROM $classeAluno a JOIN a.telefones as t JOIN a.cursos as c";
$query = $entityManager->createQuery($dql);
$alunos = $query->getResult();

foreach ($alunos as $aluno) {
    $telefones = $aluno
        ->getTelefones()
        ->map(function (Telefone $telefone) {
            return $telefone->getNumero();
        })
        ->toArray();

    echo "ID: {$aluno->getId()}";
    echo "\nNome: {$aluno->getNome()}\n";
    echo "Telefones: " . implode(', ', $telefones) . "\n";

    $cursos = $aluno->getCursos();

    foreach ($cursos as $curso){
        echo "\tID Curso: {$curso->getId()}\n";
        echo "\tCurso: {$curso->getNome()}\n";
        echo "\n";
    }

    echo "\n";
}

echo "\n";

foreach ($debuStack->queries as $queryInfo){
    echo $queryInfo['sql'] . "\n";
}