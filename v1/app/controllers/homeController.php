

<?php

    require_once '../app/controllers/EtudiantController.php';
    require_once '../app/controllers/courController.php';

    $action = $_GET['action'] ?? 'etudiant.index';

    function etudiant( $action) {
        switch ($action) {
            case 'etudiant.index':
                index();
                break;
            case 'etudiant.create':
                create();
                break;
            case 'etudiant.edit':
                edit();
                break;
            case 'etudiant.delete':
                delete();
                break;
            default:
                echo "Action non trouvée.";
                break;
        }
    }

    function cour($action) {
        switch ($action) {
            case 'cour.index':
                indexCour();
                break;
            case 'cour.create':
                createCour();
                break;
            case 'cour.edit':
                editCour();
                break;
            case 'cour.delete':
                deleteCour();
                break;
            default:
                echo "Action non trouvée.";
                break;
        }
    }


?>

