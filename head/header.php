<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/BD_DRUIDE/image/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/BD_DRUIDE/css/main.css" />
    <title>BD DRUIDE </title>
  </head>
  <body>
    <!--Barre du titre-->
    <div class=div1>
    <h1 id=titrebar><img id="logo" src="/BD_DRUIDE/image/BD_DRUIDE_LOGO_BLANC.jpg" height="150" width="150"  alt="logo Druide">
    BD DRUIDE <br>Une bibliothèque imposante sur la BD.</h1>
    <div class="navbar">
  <a class="active" href="#"><a href="index.php"<?php echo $CONFIG['root_path']?>></i> Accueil</a>
  <a href="#"><a href="/BD_DRUIDE/page/page-contact.php"></i> Contact</a>
  <?php     $link = mysqli_connect("localhost", "root", "", "bibliotheque");
  $req= "SELECT * FROM  Livre";

  ?>
   </div>
    </div>
    <!--création du bloc principal -->
