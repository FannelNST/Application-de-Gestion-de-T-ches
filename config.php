<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taskshare";

// Création de la connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
// echo 'Connexion réussi';
// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
