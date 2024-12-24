<?php

    // class Etudiant{  
    //     private $id;
    //     private $firstname;
    //     private $lastname;
    //     private $email;
    //     private $sector;
    // }

    require_once '../app/database.php'; 

    global $conn;

    function getAllEtudiants($conn) {
        $sql = "SELECT * FROM etudiants";
        return mysqli_query($conn, $sql);
    }


    function getEtudiantById($conn, $id) {
        $sql = "SELECT * FROM etudiants WHERE id = $id";
        return mysqli_query($conn, $sql);
    }

    function createEtudiant($conn, $firstname, $lastname, $email, $sector) {
        $query = "INSERT INTO etudiants(firstname, lastname, email, sector) 
                VALUES ('$firstname', '$lastname', '$email', '$sector')";
        return mysqli_query($conn, $query);
    }

    function updateEtudiant($conn, $id, $firstname, $lastname, $email, $sector) {
        $query = "UPDATE etudiants 
                  SET firstname = '$firstname', lastname = '$lastname', email = '$email', sector = '$sector' 
                  WHERE id = $id";
        return mysqli_query($conn, $query);
    }
    
    function deleteEtudiant($conn, $id) {
        $query = "DELETE FROM etudiants WHERE id = $id";
        return mysqli_query($conn, $query);
    }

?>
