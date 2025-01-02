<?php

require_once '../app/models/Etudiant.php';

    function index() {
        global $conn;

        // Récupérer tous les étudiants
        $etudiants = getAllEtudiants($conn);

        // Charger la vue avec les données
        require_once '../app/views/etudiants/index.php';
    }

    function create() {
        global $conn;

        // Récupérer les données du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $sector = $_POST['sector'];
            // Créer l'étudiant
            createEtudiant($conn, $firstname, $lastname, $email, $sector);

            // Redirection après ajout
            header('Location: /v1/app/public/index.php');

        } else {
            require_once '../app/views/etudiants/create.php';
        }

    }


    function edit() {
        global $conn;
    
        $id = $_GET['id'] ?? null;
    
        if (!$id) {
            echo "ID étudiant manquant.";
            return;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $sector = $_POST['sector'];
    
            // Mettre à jour l'étudiant
            updateEtudiant($conn, $id, $firstname, $lastname, $email, $sector);
    
            // Redirection après modification
            header('Location: /v1/public/?action=etudiant.index');
        } else {
            // Récupérer l'étudiant à modifier
            $etudiant = mysqli_fetch_assoc(getEtudiantById($conn, $id));
    
            if (!$etudiant) {
                echo "Étudiant non trouvé.";
                return;
            }
            // Charger la vue de modification
            require_once '../app/views/etudiants/edit.php';
        }
    }

    function delete() {
        global $conn;
        $id = $_GET['id'] ?? null;
        deleteEtudiant($conn, $id);
        header('Location: /v1/public/?action=etudiant.index');
    }
    

?>
