
<?php require "../head/header.php"; ?>

<div class="divb">
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name= $_POST['client_name'];
  $mail = $_POST['client_mail'];
  $choice = $_POST['client_choice'];
  $com = $_POST['com'];
  if(empty($name)){
    echo "Vous n'avez pas renseigné votre nom.";
  }
  else
  {
    echo "<h2>Bonjour $name !<h2> <br>";
   echo "Votre mail: $mail <br>";
    echo "vos options : $choice <br>";
    echo "Votre commentaire : $com";
  }
}
?>
</div>
  <?php require "../foot/footer.php"; ?>
