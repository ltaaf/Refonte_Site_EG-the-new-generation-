<?php
// include ("connexion.php");
require_once('connexion.php');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$genre = $_POST['genre'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$numero = $_POST['numero'];
$pays = $_POST['pays'];
$niveau = $_POST['niveau'];
$thematique = $_POST['thematique'];
$campus = $_POST['campus'];
$okpostule = $_POST['okpostule'];



if(isset($okpostule)){
  echo $nom;
  $sql = "INSERT INTO `postuler` (`id_postule`, `nom`, `penom`, `genre`, `email`, `numero`, `pays`, `niveau`, `thematique`, `campus`) VALUES (NULL, '$nom', '$prenom', '$genre', '$email', '$numero', '$pays', '$niveau', '$thematique', '$campus')";
  
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}
  ?>