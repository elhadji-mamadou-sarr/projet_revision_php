<?php


require_once __DIR__ . '/../models/ClientManager.php';

final class ClientController
{

    private $manager;

    public function __construct()
    {
        $this->manager = new ClientManager();
    }


    function index() {
        $clients = $this->manager->getAllClients();
        require_once  '../app/views/clients/index.php';
    }


    function show($id) {
        $client = $this->manager->getClientById($id);
        require_once '../app/views/clients/show.php';
    }

    public function createForm()
    {
        require_once __DIR__ . '/../views/clients/create.php';
    }

    public function edit($id)
    {
        $client = $this->manager->getClientById($id);
        require_once '../app/views/clients/edit.php';
    }

    function create($data) {
        $client = new Client($data['firstname'], $data['lastname'], $data['email'], $data['phone']);
        
        $this->manager->createClient($client);
        header('Location: /v2/public/index.php?action=client.index');   
    }


    
    public function update($id, $data)
    {
        $client = $this->manager->getClientById($id);
        $client->setFirstname($data['firstname']);
        $client->setLastname($data['lastname']);
        $client->setEmail($data['email']);
        $client->setPhone($data['phone']);
        $this->manager->updateClient($client);
        header('Location: /v2/public/index.php?action=client.index');   
    }


    public function delete($id)
    {
        $this->manager->deleteClient($id);
        header('Location: /v2/public/index.php?action=client.index');   
    }

    
}
