<html>
<head>
  <meta charset="utf-8">
  <title>BièresAGogo.com</title>
  <link rel="stylesheet" href="vueConnexion.css"/>

</head>
<body>

<div id="barreHaut">
  <div id="colonne1">
    <img src="../view/images/logoBeerHouse.jpg" height="150" width="150">
  </div>
  <div id="colonne2">
    <h1>BièresAGogo.com</h1>
     <ul>
       <li><a href="Acceuil.ctrl.php?numClient=<?php echo $numClient; ?>">Acceuil</a></li>
       <li><a href="Panier.ctrl.php?numClient=<?php echo $numClient; ?>">Mon panier</a></li>
       <li><a href="Connexion.ctrl.php?numClient=<?php echo $numClient; ?>">Se connecter</a></li>
       <li><a href="Inscription.ctrl.php?numClient=<?php echo $numClient; ?>">S'inscrire</a></li>
     </ul>
  </div>
  <div id="colonne3">
    <form method="post" action="traitement.php">
      <p>
        <label> </label> <input type="text" name="pseudonym" placeholder="Rechercher"/>
      </p>
    </form>
  </div>
</div>

<<<<<<< HEAD
<form  method="post" action="../controler/Connexion.ctrl.php" id="conx">
=======
<form  method="post" action="../controler/Connexion.ctrl.php?numClient=<?php echo $numClient; ?>. &id="conx">
>>>>>>> 0f01da0b352b79730beae9f6470368c8629ae664

  <fieldset>
    <legend>Connexion</legend>
    <label for="pseudo">Pseudo :</label></br>
    <input type="text" name="pseudo" id="pseudo" required/></br></br>
    <label for="mdp">Mot de passe :</label></br>
    <input type="password" name="mdp" id="mdp" required/></br></br>
    <input type="submit" value="Envoyer" />
  </fieldset>

</form>

</body>
</html>
