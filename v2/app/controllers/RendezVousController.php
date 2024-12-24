<?php

require_once __DIR__ . '/../models/RendezVousManager.php';
require_once __DIR__ . '/../models/ClientManager.php';

class RendezVousController
{
    private $manager;
    private $clientManager;

    public function __construct()
    {
        $this->manager = new RendezVousManager();
        $this->clientManager = new ClientManager();
    }

    public function index()
    {
        $rendezVous = $this->manager->getAllRendezVous();
        require_once '../app/views/rendez_vous/index.php';
    }

    public function createForm()
    {
        $clients = $this->clientManager->getAllClients();
        require_once '../app/views/rendez_vous/create.php';
    }

    public function create($data)
    {
        $rendezVous = new RendezVous($data['date'], $data['time'], $data['description'], $data['client_id']);
        $this->manager->createRendezVous($rendezVous);
        header('Location: /v2/public/index.php?action=rendezvous.index');
    }

    public function edit($id)
    {
        $clients = $this->clientManager->getAllClients();
        $rendezvous = $this->manager->getRendezVousById($id);
        require_once '../app/views/rendez_vous/edit.php';
    }

    public function show($id)
    {
        $clients = $this->clientManager->getAllClients();
        $rendezvous = $this->manager->getRendezVousById($id);
        require_once '../app/views/rendez_vous/show.php';
    }

    public function update($id, $data)
    {
        $rendezVous = new RendezVous($data['date'], $data['time'], $data['description'], $data['client_id']);
        $rendezVous->setId($id);
        $this->manager->updateRendezVous($rendezVous);
        header('Location: /v2/public/index.php?action=rendezvous.index');
    }

    public function delete($id)
    {
        $this->manager->deleteRendezVous($id);
        header('Location: /v2/public/index.php?action=rendezvous.index');
    }
}
