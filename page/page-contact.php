<?php require "../head/header.php"; ?>
  <body>
    <div class="divb">
    <div
    <form method="post" action="receive.php">

     <fieldset>
         <legend>Pour Nous contacter</legend>
         <label for ="name">Nom : </label>
         <input type="text" id="name" name="client_name" autofocus required><br>

         <input type="radio" id="part" name="client_type" value="Particulier">
         <label> for="part">Particulier</label>
         <input type="radio" id="ent" name="client_type" value="Entreprise" checked>
         <label for="ent">Entreprise</label>

         <br>

         <label for="mail">Courriel :</label>
         <input type="email" id="mail" name="client_mail" required><br>
         <label for="mail">Nos Courriel : <p<a href"nicolasmaniere77700@gmail.Com">Nicolas Maniere</p>  </label>
         </form>
       </fieldset>




         <label for="pack">Forfait :</label>
         <input type="text" id="pack" value="Forfait A" disabled><br>

         <label for="duration">Durée de l'engagement :</label>
         <select>
         <option value="1y">1 an</option>
         <option value="2y" selected>2 ans</option>
         <option value="5y">5 ans</option>
         </select><br>

         <fieldset>
         <legend>Ajouter des options à votre forfait :</legend>

         <input type="checkbox" id="opt1" name="opt1" value="msginstant"
                <label for="opt1">Messagerie instantannée</label><br>

          <input type="checkbox" id="opt2" name="opt2" value="over100"
                <label for="opt1">+100 utilisateurs connectés</label><br>

        <input type="checkbox" id="opt3" name="opt3" value="stock20"
                <label for="opt1">+20Go d'espace de stockage</label>



     </fieldset>

     <label for="addreq">Que avez vous pensez du site ? Faite le nous savoir ! : </label> <br>
     <textarea id= "addreq" placeholder="Entrez ici vos demandes"> </textarea>
  </form>
</div>
</div>
      <?php require "../foot/footer.php"; ?>
</body>
