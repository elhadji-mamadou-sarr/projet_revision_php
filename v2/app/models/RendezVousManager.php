<?php


require_once __DIR__ . '/../database.php';
require_once 'RendezVous.php';


class RendezVousManager
{
    private $db;

    public function __construct()
    {
        $database  = new Database();
        $this->db = $database->connect();
    }

    public function getAllRendezVous()
    {
        $query = $this->db->query('SELECT * FROM rendez_vous'); 
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRendezVousById($id)
    {
        $query = $this->db->prepare('SELECT * FROM rendez_vous WHERE id = ?');
        $query->execute([$id]);
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $rendezvous = new RendezVous($row['date'], $row['time'], $row['description'], $row['client_id']);
            $rendezvous->id = $row['id']; // Accessing private property for internal use

            return $rendezvous;
        }

        return null;
    }

    public function createRendezVous($rendezVous)
    {
        $query = $this->db->prepare('INSERT INTO rendez_vous (date, time, description, client_id) VALUES (?, ?, ?, ?)');
        $query->execute([$rendezVous->getDate(), $rendezVous->getTime(), $rendezVous->getDescription(), $rendezVous->getClientId()]);
    }

    public function updateRendezVous($rendezVous)
    {
        $query = $this->db->prepare('UPDATE rendez_vous SET date = ?, time = ?, description = ?, client_id = ? WHERE id = ?');
        $query->execute([$rendezVous->getDate(), $rendezVous->getTime(), $rendezVous->getDescription(), $rendezVous->getClientId(), $rendezVous->getId()]);
    }

    public function deleteRendezVous($id)
    {
        $query = $this->db->prepare('DELETE FROM rendez_vous WHERE id = ?');
        $query->execute([$id]);
    }
}
