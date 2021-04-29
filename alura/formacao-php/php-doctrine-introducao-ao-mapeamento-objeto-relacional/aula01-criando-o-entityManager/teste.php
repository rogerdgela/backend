<?php

use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . "/vendor/autoload.php";

$entityManagerfactory = new EntityManagerFactory();
$entityManager = $entityManagerfactory->getEntityManager();

var_dump($entityManager->getConnection());