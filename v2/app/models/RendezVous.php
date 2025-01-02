<?php

class RendezVous
{
    public $id;
    private $date;
    private $time;
    private $description;
    private $clientId;

    public function __construct($date, $time, $description, $clientId)
    {
        $this->date = $date;
        $this->time = $time;
        $this->description = $description;
        $this->clientId = $clientId;
    }

    // Getters et Setters
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function getDate() { return $this->date; }
    public function setDate($date) { $this->date = $date; }

    public function getTime() { return $this->time; }
    public function setTime($time) { $this->time = $time; }

    public function getDescription() { return $this->description; }
    public function setDescription($description) { $this->description = $description; }

    public function getClientId() { return $this->clientId; }
    public function setClientId($clientId) { $this->clientId = $clientId; }
}
