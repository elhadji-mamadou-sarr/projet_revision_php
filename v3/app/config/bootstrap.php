<?php

require_once 'database.php';

// Charger l'EntityManager comme global
global $entityManager;

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);