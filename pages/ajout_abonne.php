<?php
// include ("connexion.php");
require_once('connexion.php');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $terms1 = filter_input(INPUT_POST, "terms1", FILTER_VALIDATE_BOOL);
  $terms2 = filter_input(INPUT_POST, "terms2", FILTER_VALIDATE_BOOL);
  $ok = $_POST['sub'];

if (isset($ok)){

      if($terms1 || $terms2){
        $sql = "INSERT INTO `newsletter` (`id_abonne`, `pseudo`, `email`) VALUES (NULL, '$name', '$email')";

        if ($conn->query($sql) === TRUE) {
          echo "Nouvel enregistrement créé avec succès";
        }
         else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
      }
      else{
        // echo "les informations saisies ne sont pas correctes";
        echo '<script> alert("Vous devez saisir une des langues");</script>';
      }

}
//echo '<script> alert("Informations non enregistrées");</script>'; 
?>
  
