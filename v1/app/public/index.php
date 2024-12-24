

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Gestion université</title>
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
                <a class="nav-link active" aria-current="page" href="?action=etudiant.index">Etudiants</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?action=cour.index">Cours</a>
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

            require_once '../app/controllers/homeController.php';

            if (isset($_GET['action'])) {
                $action = $_GET['action'];
                if (str_starts_with($action, 'etudiant.')) {
                    etudiant($action);
                }
                else {
                    cour($action);
                }
            }

        ?>


    </div>

</body>
</html>
