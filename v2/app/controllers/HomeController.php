
<?php


require_once __DIR__ . '/../controllers/ClientController.php';
require_once __DIR__ . '/../controllers/RendezVousController.php';

class HomeController 
{
    private $clientController;
    private $rendezVousController;

    public function __construct() {
        $this->clientController  = new ClientController();
        $this->rendezVousController  = new RendezVousController();
    }

    function home() {

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            if ($_GET['action'] === 'client.create') {
                $this->clientController->createForm();
            }elseif ($_GET['action'] === 'client.edit') {
                $id = $_GET['id'];
                $this->clientController->edit($id);
            }elseif ($_GET['action'] === 'client.delete') {
                $id = $_GET['id'];
                $this->clientController->delete($id);
            }elseif ($_GET['action'] === 'client.show') {
                $id = $_GET['id'];
                $this->clientController->show($id);
            }elseif ($_GET['action'] === 'client.index'){
                $this->clientController->index();
            }

            /**
             * Rendez-vous 
             */
            if ($_GET['action'] === 'rendezvous.create') {
                $this->rendezVousController->createForm();
            } elseif ($_GET['action'] === 'rendezvous.edit') {
                $this->rendezVousController->edit($_GET['id']);
            } elseif ($_GET['action'] === 'rendezvous.delete') {
                $this->rendezVousController->delete($_GET['id']);
            } elseif ($_GET['action'] === 'rendezvous.show') {
                $this->rendezVousController->show($_GET['id']);
            } elseif ($_GET['action'] === 'rendezvous.index') {
                $this->rendezVousController->index();
            }



        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if ($_GET['action'] === 'client.store') {
                $this->clientController->create($_POST);
            }elseif ($_GET['action'] === 'client.update') {
                $this->clientController->update($_POST['id'], $_POST);
            }

            /**
             * Rendez-vous 
             */
            if ($_GET['action'] === 'rendezvous.store') {
                $this->rendezVousController->create($_POST);
            } elseif ($_GET['action'] == 'rendezvous.update') {

                $this->rendezVousController->update($_POST['id'], $_POST);
            }
        }


    }


}

