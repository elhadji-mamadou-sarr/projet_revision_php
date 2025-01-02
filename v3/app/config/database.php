<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once __DIR__ . '/../../vendor/autoload.php';

class DataBase{

    function connexion() {
        // Configuration pour les entités avec les attributs PHP 8+
        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__ . '/../Models'], // Chemin vers les entités
            isDevMode: true            // Mode développement
        );

        // Configuration de la connexion MySQL
        $connection = DriverManager::getConnection([
            'dbname' => 'farm_management',  
            'user' => 'root',            
            'password' => '',            
            'host' => '127.0.0.1',       
            'driver' => 'pdo_mysql',    
            'charset' => 'utf8mb4', 
        ], $config);

        // Création de l'EntityManager
        return $entityManager = new EntityManager($connection, $config);
    }

}