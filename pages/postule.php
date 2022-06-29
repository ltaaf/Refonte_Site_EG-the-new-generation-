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
//   $terms1 = filter_input(INPUT_POST, "terms1", FILTER_VALIDATE_BOOL);
//   $terms2 = filter_input(INPUT_POST, "terms2", FILTER_VALIDATE_BOOL);
  $okpostule = $_POST['okpostule'];

if (isset($okpostule)){

        $sql2 = "INSERT INTO `postuler` (`id_postule`, `nom`, `penom`, `genre`, `email`, `numero`, `pays`, `niveau`, `thematique`, `campus`) VALUES (NULL, '$nom', '$prenom', '$genre', '$email', '$numero', '$pays', '$niveau', '$thematique', '$campus')";

        if ($conn->query($sql2) === TRUE) {
          echo "Nouvel enregistrement créé avec succès";
        }
         else {
          echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
        $conn->close();
}
//echo '<script> alert("Informations non enregistrées");</script>'; 
?>