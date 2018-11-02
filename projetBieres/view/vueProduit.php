<html>
<head>
  <meta charset="utf-8">
  <title>BièresAGogo.com</title>
  <!--<link rel="stylesheet" href="vueProduit.css"/>-->

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
       <!--<li><a href="#1">Catégories</a></li>-->
       <li><a href="#2">Mon panier</a></li>
       <li><a href="Connexion.ctrl.php">Se connecter</a></li>
       <li><a href="Inscription.ctrl.php">S'inscrire</a></li>
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

<section class="body">

    <div id="sidemenu">
      <h4> Catégories </h4>
      <ul>
        <li><a>Nouveautés</a></li>
        <li><a>Catégories</a></li>
        <li><a>Mon panier</a></li>
        <li><a>Se connecter</a></li>
        <li><a>S'inscrire</a></li>
      </ul>
    </div>

    <section class="leproduit">
      <div id="img">
        <image src="images/<?php echo $m->photographie; ?>" height="250" width="250">
      </div>
      <div id="presentation">
        <div id="description">
          <?php
            echo '<p>'.$m->intitule.'</p>';
            echo '<p>'.$m->description.'</p>';
            echo '<p> référence :'.$m->id.'</p>';
          ?>
        </div>
        <div id="caracteristique">
          <p>pleins de caracteristiques</p>
        </div>
        <div id="prix">
          <?php
            echo '<p>'.$m->prix.' €</p>';
          ?>
          <input type="submit" name="ajouterPanier" value="Ajouter au panier" onclick="fonction();" >
        </div>
      </div>
    </section>

  </section>
</body>
</html>
