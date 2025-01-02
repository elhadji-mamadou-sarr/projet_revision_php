<?php

require_once __DIR__ . '/../database.php';
require_once 'Client.php';

class ClientManager
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getAllClients()
    {
        $stmt = $this->db->query("SELECT * FROM clients");
        $clients = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $client = new Client($row['firstname'], $row['lastname'], $row['email'], $row['phone']);
            $client->id = $row['id']; // Accessing private property for internal use
            $clients[] = $client;
        }

        return $clients;
    }


    public function getClientById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM clients WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $client = new Client($row['firstname'], $row['lastname'], $row['email'], $row['phone']);
            $client->id = $row['id']; // Accessing private property for internal use

            return $client;
        }

        return null;
    }

    public function createClient(Client $client)
    {
        $stmt = $this->db->prepare("INSERT INTO clients (firstname, lastname, email, phone) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $client->getFirstname(),
            $client->getLastname(),
            $client->getEmail(),
            $client->getPhone(),
        ]);
    }

    public function updateClient(Client $client)
    {
        $stmt = $this->db->prepare("UPDATE clients SET firstname = ?, lastname = ?, email = ?, phone = ? WHERE id = ?");
        return $stmt->execute([
            $client->getFirstname(),
            $client->getLastname(),
            $client->getEmail(),
            $client->getPhone(),
            $client->getId(),
        ]);
    }

    public function deleteClient($id)
    {
        $stmt = $this->db->prepare("DELETE FROM clients WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

?>
