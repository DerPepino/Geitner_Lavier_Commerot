
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
       <li><a href="Acceuil.ctrl.php?numClient=<?php echo $numClient; ?>">Acceuil</a></li>
       <li><a href="Panier.ctrl.php?numClient=<?php echo $numClient; ?>">Mon panier</a></li>
       <li><a href="Connexion.ctrl.php?numClient=<?php echo $numClient; ?>">Se connecter</a></li>
       <li><a href="Inscription.ctrl.php?numClient=<?php echo $numClient; ?>">S'inscrire</a></li>
     </ul>
  </div>
  <div id="colonne3">
    <form method="post" action="traitement.php?numClient=<?php echo $numClient; ?>">
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
      <li><a  href="Categories.ctrl.php?numClient=<?php echo $numClient; ?>">Blondes</a></li>
      <li><a  href="Categories.ctrl.php?numClient=<?php echo $numClient; ?>">Brunes</a></li>
      <li><a  href="Categories.ctrl.php?numClient=<?php echo $numClient; ?>">Ambrées</a></li>
      <li><a  href="Categories.ctrl.php?numClient=<?php echo $numClient; ?>">Blanches</a></li>
    </ul>
  </div>

  <div id="panier">

    <div id="bieres">
      <?php
      foreach ($lesProduits as $val => $biere) {
          echo '<section class="prod">';
          echo '<img scr="images/'.$biere->photographie.'" alt="'.$biere->photographie.'" height="180" width="180">';
          echo '<div id="partie_droite"> <div id="details"> <div id="infos">';
          echo '<p> '.$biere->intitule .'</p>';
          echo '<p> '.$biere->description .'</p>';
          echo '</div>';
          echo '<p>' .$biere->prix .' € </p>';
          echo '</div>';
          echo '<div id="boutons">';
          echo '<a href="Produit.ctrl.php?id='.$biere->id.'&numClient='.$numClient.'">
            <input type="submit" name="voirProduit" value="Voir le produit">
          </a>';
          echo '<a href="Panier.ctrl.php?ajout='.$biere->id.'&numClient='.$numClient.'">
            <input type="submit" name="supprimer" value="Supprimer">
          </a>';
          echo '</div>';
          echo '</div>';
          echo '</section>';
      }
      ?>
    </div>

    <div id="paiement">
      <p> Prix Total : <?php echo $prixTotal; ?> € </p>
      <a href="Acceuil.ctrl.php?numClient=<?php echo $numClient; ?>">
        <input type="submit" name="commander" value="Passer ma commande">
      </a>
    </div>

  </div>

</section>

</body>
</html>
