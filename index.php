<?php require "head/header.php"; ?>
    <!--création du bloc principal -->
    <div class=div2>

      <div class="row">

        <div class="column3" style="background-color:#F95074;">
        <h2>10 BD CULTES !</h2>
        </div>

        <div class="column3" style="background-color: snow;">
        <ul class="livre1" >

          <?php
          $res = $link->query("SELECT Genre.libelle,Livre.annee,nom,prenom,isbn
          FROM Auteur
          JOIN Personne ON Auteur.idPersonne  = Personne.id
          JOIN role ON Auteur.idROLE=Role.id
          JOIN Livre ON Auteur.idLivre= Livre.isbn
          JOIN Genre ON Livre.genre = Genre.id
          JOIN Editeur ON Livre.editeur=Editeur.id
          WHERE auteur.idRole=1;
        ");
     if($res)
     {
         while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
         {
           echo "<div class='column' style=background-color: 'snow';>";
           echo "<ul class='livre1' >";
             echo "<a href='page/" . $row["isbn"] . ".php?isbn=" . $row["isbn"]."'><img src='image/" . $row["isbn"] . ".jpg' height='400' width='275'></a>";
             echo "<li>Code ISBN: " . $row["isbn"] ."</li>";
                echo "<li>Type: " . $row["libelle"] ."</li>";
                echo "<li>Année: " . $row["annee"] ."</li>";
                echo "<li>Scénariste: " . $row["nom"] ." ". $row["prenom"] ."</li>";

             echo "</div>";
         }
     }
        ?>
                       </ul>


</div>

                              </div>

        </div>
<!-- Bloc de Fin -->
<?php require "foot/footer.php"; ?>

<!--*************************************************FIN*************************************************-->

  </body>
</html>
