<?php


require_once __DIR__ . '/app/config/bootstrap.php';

// Charger l'EntityManager comme global
global $entityManager;

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);
// use Doctrine\ORM\Tools\SchemaTool;

// require_once __DIR__ . '/app/config/bootstrap.php';

// $schemaTool = new SchemaTool($entityManager);
// $metadata = $entityManager->getMetadataFactory()->getAllMetadata();

// try {
//     $schemaTool->updateSchema($metadata, true);
//     echo "Schéma mis à jour avec succès.\n";
// } catch (Exception $e) {
//     echo "Erreur : " . $e->getMessage() . "\n";
// }
// }
