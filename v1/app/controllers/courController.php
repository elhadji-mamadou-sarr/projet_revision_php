<?php

require_once '../app/models/cour.php';

    function indexCour() {
        global $conn;

        // Récupérer tous les étudiants
        $cours = getAllCours($conn);

        // Charger la vue avec les données
        require_once '../app/views/cours/index.php';
    }

    function createCour() {
        global $conn;

        // Récupérer les données du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $code = $_POST['code'];
            $nbTime = $_POST['nbTime'];
            // Créer l'étudiant
            createCours($conn, $name, $code, $nbTime);

            // Redirection après ajout
            header('Location: /v1/app/public/?action=cour.index');

        } else {
            require_once '../app/views/cours/create.php';
        }

    }


    function editCour() {
        global $conn;
    
        $id = $_GET['id'] ?? null;
    
        if (!$id) {
            echo "ID cours manquant.";
            return;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $name = $_POST['name'];
            $code = $_POST['code'];
            $nbTime = $_POST['nbTime'];
    
            // Mettre à jour le cour
            updateCour($conn, $id, $name, $code, $nbTime);
    
            // Redirection après modification
            header('Location: /v1/app/public/?action=cour.index');
        } else {
            // Récupérer le cour à modifier
            $cour = mysqli_fetch_assoc(getCourById($conn, $id));
    
            if (!$cour) {
                echo "Cour non trouvé.";
                return;
            }
            // Charger la vue de modification
            require_once '../app/views/cours/edit.php';
        }
    }

    function deleteCour() {
        global $conn;
        $id = $_GET['id'] ?? null;
        deleteCours($conn, $id);
        header('Location: /v1/app/public/?action=cour.index');
    }
    

?>
