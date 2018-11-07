<html>
<head>
  <meta charset="utf-8">
  <title>BièresAGogo.com</title>
  <link rel="stylesheet" href="vueInscription.css"/>

</head>
<body>

<div id="barreHaut">
  <div id="colonne1">
    <img src="images/logoBeerHouse.jpg" height="150" width="150">
  </div>
  <div id="colonne2">
    <h1>BièresAGogo.com</h1>
     <ul>
       <li><a href="Acceuil.ctrl.php">Acceuil</a></li>
       <li><a href="Panier.ctrl.php">Mon panier</a></li>
       <li><a href="Connexion.ctrl.php">Se connecter</a></li>
       <li><a href="Inscription.ctrl.php">S'inscrire</a></li>
     </ul>
  </div>
  <div id="colonne3">
    <form method="post" action="traitement.php">
      <p>
        <input type="text" name="pseudo" placeholder="Rechercher"/>
      </p>
    </form>
  </div>
</div>

<form  method="post" action="traitement.php" id="insc">

  <fieldset>
    <legend>Inscription</legend>
    <label for="nom">Nom :</label></br>
    <input type="text" name="nom" id="nom" required/></br></br>
    <label for="prenom">Prénom :</label></br>
    <input type="text" name="prenom" id="prenom" required/></br></br>
    <label for="date">Date de naissance :</label></br>
    <input type="date" name="date" id="date" required/></br></br>
    <label for="mail">Adresse email :</label></br>
    <input type="text" name="mail" id="mail" required/></br></br>
    <label for="mdp">Mot de passe :</label></br>
    <input type="text" name="mdp" id="mdp" required/></br></br>
    <label for="cmdp">Confirmer votre mot de passe :</label></br>
    <input type="text" name="cmdp" id="cmdp" required/>
  </fieldset>

  <fieldset>
    <legend>Adresse de livraison</legend>
    <label for="adr1">Adresse 1 :</label></br>
    <input type="text" name="adr1" id="adr1" required/></br></br>
    <label for="adr2">Adresse 2 :</label></br>
    <input type="text" name="adr2" id="adr2"></br></br>
    <label for="postal">Code postal :</label></br>
    <input type="text" name="postal" id="postal" required/></br></br>
    <label for="ville">Ville :</label></br>
    <input type="text" name="ville" id="ville" required/></br></br>
    <label for="pays">pays :</label></br>
    <input type="text" name="pays" id="pays" required/></br></br>
    <input type="submit" value="Envoyer" />
  </fieldset>
</form>

</body>
</html>
