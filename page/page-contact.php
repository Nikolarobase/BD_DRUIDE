<?php require "../head/header.php"; ?>
  <body>

    <div class="divb">
      <div class="column3" style="background-color:#F95074;">
      <h2>CONTACT</h2>
      </div>
    <form method="post" action="receive.php">

     <fieldset>
         <legend>Pour Nous contacter</legend>
         <label for ="name">Nom : </label>
         <input type="text" id="name" name="client_name" autofocus required><br>

         <br>

         <label for="mail">Courriel :</label>
         <input type="email" id="mail" name="client_mail" required><br>

       </fieldset>


         <fieldset>

         <legend>Comment avez vous connu BD DRUIDE ? : </legend>

         <input type="checkbox" id="opt1" name="opt1" value="msginstant"
                <label for="opt1">Par hasard</label><br>

          <input type="checkbox" id="opt2" name="opt2" value="over100"
                <label for="opt1">Par le bouche à oreille</label><br>

        <input type="checkbox" id="opt3" name="opt3" value="stock20"
                <label for="opt1">Par les réseaux sociaux</label><br>

                <input type="checkbox" id="opt3" name="opt4" value="stock20"
                        <label for="opt1">Par l'article d'une agence de presse</label>

        </fieldset>
<fieldset>
     <label for="addreq">Objet : </label> <br>
     <textarea id= "addreq" placeholder="Entrez ici vos demandes"> </textarea>
     <button type="submit" >S'inscrire</button>
</fieldset>

  </form>
</div>

      <?php require "../foot/footer.php"; ?>
</body>
