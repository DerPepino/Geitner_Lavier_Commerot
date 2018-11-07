
<html>
<head>
  <meta charset="utf-8">
  <title>BièresAGogo.com</title>
  <!--<link rel="stylesheet" href="vueAcceuil.css"/>-->

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

<section class="body">

  <div id="sidemenu">
    <h4> Catégories </h4>
    <ul>
      <li><a>Blondes</a></li>
      <li><a>Brunes</a></li>
      <li><a>Ambrées</a></li>
      <li><a>Blanches</a></li>
    </ul>
  </div>

  <div id="panier">

    <div id="bieres">
      <?php
      foreach ($lesProduits as $val => $biere) {
          echo '<section class="prod">';
          echo '<img scr="images/'.$biere->photographie.'" alt="'.$biere->photographie.'" height="180" width="180">';
          echo '<div class="infos">';
          echo '<p> '.$biere->intitule .'</p>';
          echo '<p> '.$biere->description .'</p>';
          echo '<p> '.$biere->prix .'</p>';
          echo '</div>';
          echo '<p> Quantité </p>';
          echo '<p>' .$biere->prix .'</p>';
          echo '</section>';
      }
      ?>
    </div>

    <div id="paiement">
      <p> Prix Total : 9999€ </p>
      <a href="Acceuil.ctrl.php">
        <input type="submit" name="commander" value="Passer ma commande">
      </a>
    </div>

  </div>

</section>

</body>
</html>
