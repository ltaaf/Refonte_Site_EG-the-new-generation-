<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "energygeneration";
// On crée la connexion 
$conn = new mysqli($servername, $username, $password, $dbname);
// On verifie la connexion
// if ($conn->connect_error) {
//   die("La connexion à la base des données a échoué: " . $conn->connect_error);
// }
?>
