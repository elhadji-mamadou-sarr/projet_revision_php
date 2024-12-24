
<?php

require_once '../app/database.php'; 


function getAllCours($conn) {
    $sql = "SELECT * FROM cours";
    return mysqli_query($conn, $sql);
}


function getCourById($conn, $id) {
    $sql = "SELECT * FROM cours WHERE id = $id";
    return mysqli_query($conn, $sql);
}

function createCours($conn, $name, $code, $nbTime) {
    $query = "INSERT INTO cours(name, code, nbTime) 
            VALUES ('$name', '$code', '$nbTime')";
    return mysqli_query($conn, $query);
}

function updateCour($conn, $id, $name, $code, $nbTime ) {
    $query = "UPDATE cours 
              SET name = '$name', code = '$code', nbTime = '$nbTime' 
              WHERE id = $id";
    return mysqli_query($conn, $query);
}

function deleteCours($conn, $id) {
    $query = "DELETE FROM cours WHERE id = $id";
    return mysqli_query($conn, $query);
}
