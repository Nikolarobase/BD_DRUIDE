
<?php require "../head/header.php"; ?>

<div class="divb">
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name= $_POST['client_name'];
      $type = $_POST['client_type'];
      $mail = $_POST['client_mail'];
      if(empty($name)){
        echo "Vous n'avez pas renseigné votre nom.";
      }
      else
      {
        echo "<h2>Bonjour $name ! Merci pour votre envoie... Nous essayerons de vous répondre au plus vite !<h2>";
        echo "Votre mail: $mail";
      }
    }


 ?>
