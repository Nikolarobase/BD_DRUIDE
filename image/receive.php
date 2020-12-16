bonjour
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name= $_POST['client_name'];
      $type = $_POST['client_type'];
      $type = $_POST['client_mail'];
      if(empty($name)){
        echo "Vous n'avez pas renseigné votre nom.";
      }
      else
      {
        echo "bonjour $name !";
      }
    }
 ?>
