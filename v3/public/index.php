<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de ferme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?action=animal.index">Animaux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?action=equipment.index">Equipement</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <?php
       
        include '../app/config/database.php';
        include '../app/controllers/AnimalController.php';
        // Charger l'autoloader de Composer
        require_once '../vendor/autoload.php';

        $database = new DataBase();
    
        use App\Controllers\AnimalController;
        use App\Controllers\EquipmentController;

        // Instancier la base de données et l'EntityManager
        $entityManager = $database->connexion();

        $animalController = new AnimalController($entityManager);
        $equipmentController = new EquipmentController($entityManager);

        // Récupérer l'action depuis l'URL
        $action = $_GET['action'] ?? null;

        // Routeur simple
        if ($action === 'animal.index') {
            
            $animalController->index();

        } elseif ($action === 'equipment.index') {

            $equipmentController->index();

        } elseif ($action === 'equipment.create') {
            $equipmentController->create();
        }elseif ($action === 'equipment.edit') {
            $id = $_GET['id'];
            $equipmentController->edit($id);
        } elseif ($action === 'equipment.store') {

            $equipmentController->store($_POST);
        }elseif ($action === 'equipment.update') {
           
            $equipmentController->update($_POST);
        }elseif ($action === 'equipment.delete') {
            $id = $_GET['id'];
            $equipmentController->delete($id);
        }


        if ($action === 'animal.create') {
            $animalController->create();
        }elseif ($action === 'animal.edit') {
            $id = $_GET['id'];
            $animalController->edit($id);
        } elseif ($action === 'animal.store') {

            $animalController->store($_POST);
        }elseif ($action === 'animal.update') {
           
            $animalController->update($_POST);
        }elseif ($action === 'animal.delete') {
            $id = $_GET['id'];
            $animalController->delete($id);
        }


     
        ?>
        <div class="pt-4">
            <a class="btn btn-outline-primary" href="/" type="submit">Retour à l'accueil</a>
        </div>
    </div>
</body>
</html>