<?php

final class Database
{

    private $host = 'localhost';
    private $db = 'gestion_universite';
    private $user = 'root';
    private $pass = '';
    private $conn;

    public function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }

        return $this->conn;
    }
    
}
