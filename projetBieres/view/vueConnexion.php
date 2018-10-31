<html>
<head>
  <meta charset="utf-8">
  <title>BièresAGogo.com</title>
  <link rel="stylesheet" href="vueConnexion.css"/>

</head>
<body>

<div id="barreHaut">
  <div id="colonne1">
    <img src="logoBeerHouse.jpg" height="150" width="150">
  </div>
  <div id="colonne2">
    <h1>BièresAGogo.com</h1>
     <ul>
       <li><a href="#0">Nouveautés</a></li>
       <li><a href="#1">Catégories</a></li>
       <li><a href="#2">Mon panier</a></li>
       <li><a href="vueConnexion.php">Se connecter</a></li>
       <li><a href="vueInscription.php">S'inscrire</a></li>
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
      <img scr="logoBeerHouse.jpg" height="30" width="30">
      </a>';
    //}
    ?>
  </div>

</div>

<form  method="post" action="traitement.php" id="conx">

  <fieldset>
    <legend>Connexion</legend>
    <label for="mail">Adresse email :</label></br>
    <input type="text" name="mail" id="mail" required/></br></br>
    <label for="mdp">Mot de passe :</label></br>
    <input type="text" name="mdp" id="mdp" required/></br></br>
    <input type="submit" value="Envoyer" />
  </fieldset>

</form>

</body>
</html>
