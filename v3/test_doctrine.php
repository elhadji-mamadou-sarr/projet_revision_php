<?php

// use Doctrine\DBAL\DriverManager;
// use Doctrine\ORM\EntityManager;
// use Doctrine\ORM\ORMSetup;

// require_once "vendor/autoload.php";

// // Configuration pour les entités avec les attributs PHP 8+
// $config = ORMSetup::createAttributeMetadataConfiguration(
//     [__DIR__ . '/../models'], // Chemin vers les entités
//     isDevMode: true            // Mode développement
// );

// // Configuration de la connexion MySQL
// $connection = DriverManager::getConnection([
//     'dbname' => 'farm_management',  // Nom de la base de données
//     'user' => 'root',            // Utilisateur
//     'password' => '',            // Mot de passe (vide pour local par défaut)
//     'host' => '127.0.0.1',       // Adresse du serveur
//     'driver' => 'pdo_mysql',     // Driver pour MySQL
//     'charset' => 'utf8mb4',      // Encodage des caractères (important pour UTF-8 étendu)
// ], $config);

// // Création de l'EntityManager
// $entityManager = new EntityManager($connection, $config);

use Doctrine\ORM\Tools\SchemaTool;

require_once __DIR__ . '/app/config/bootstrap.php';

$schemaTool = new SchemaTool($entityManager);
$metadata = $entityManager->getMetadataFactory()->getAllMetadata();

try {
    $schemaTool->updateSchema($metadata, true);
    echo "Schéma mis à jour avec succès.\n";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "\n";
}