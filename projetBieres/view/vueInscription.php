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
       <li><a href="#0">Nouveautés</a></li>
       <li><a href="#1">Catégories</a></li>
       <li><a href="#2">Mon panier</a></li>
       <li><a href="#3">Se connecter</a></li>
       <li><a href="#4">S'inscrire</a></li>
     </ul>
  </div>
  <div id="colonne3">
    <form method="post" action="traitement.php">
      <p>
        <label> </label> <input type="text" name="pseudo" placeholder="Rechercher"/>
      </p>
    </form>
  </div>
</div>

<div id="body">
  <div id="stand">
    <?php
    //foreach ($liste as $id => $url) {
    /*echo '<a href="play.ctrl.php?id='.$id.'&firstId='.$ind.'">
      <img scr="'.$url.'" alt="'.$url.'" height="200" width="200">
      </a>';
    }*/
    echo '<a href="play.ctrl.php?id=1&firstId=5">
      <img scr="images/logoBeerHouse.jpg" height="30" width="30">
      </a>';
    //}
    ?>
  </div>

</div>

<form  method="post" action="traitement.php" id="insc">

  <fieldset>
    <legend>Inscription</legend>
    <label for="nom">Nom :</label></br>
    <input type="text" name="nom" id="nom"/></br></br>
    <label for="prenom">Prénom :</label></br>
    <input type="text" name="prenom" id="prenom"/></br></br>
    <label for="date">Date de naissance :</label></br>
    <input type="date" name="date" id="date"/></br></br>
    <label for="mail">Adresse email :</label></br>
    <input type="text" name="mail" id="mail"/></br></br>
    <label for="mdp">Mot de passe :</label></br>
    <input type="text" name="mdp" id="mdp"/></br></br>
    <label for="cmdp">Confirmer votre mot de passe :</label></br>
    <input type="text" name="cmdp" id="cmdp"/>
  </fieldset>

  <fieldset>
    <legend>Livraisons</legend>
    <label for="adr1">Adresse 1 * :</label></br>
    <input type="text" name="adr1" id="adr1"></br></br>
    <label for="adr2">Adresse 2 :</label></br>
    <input type="text" name="adr2" id="adr2"></br></br>
    <label for="postal">Code postal * :</label></br>
    <input type="text" name="postal" id="postal"></br></br>
    <label for="ville">Ville * :</label></br>
    <input type="text" name="ville" id="ville"></br></br>
    <label for="pays">pays * :</label></br>
    <input type="text" name="pays" id="pays"></br></br>
  </fieldset>
</form>

</body>
</html>
