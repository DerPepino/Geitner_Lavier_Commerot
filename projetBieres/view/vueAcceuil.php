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
      <li><a  href="Categories.ctrl.php?numClient=<?php echo $numClient; ?>">Blondes</a></li>
      <li><a  href="Categories.ctrl.php?numClient=<?php echo $numClient; ?>">Brunes</a></li>
      <li><a  href="Categories.ctrl.php?numClient=<?php echo $numClient; ?>">Ambrées</a></li>
      <li><a  href="Categories.ctrl.php?numClient=<?php echo $numClient; ?>">Blanches</a></li>
    </ul>
  </div>

  <div id="stand">

    <div id="bieres">
      <?php
      foreach ($lesProduits as $val => $biere) {
        echo '<div <div class="prod">';
        echo '<p>';
        echo '<a href="Produit.ctrl.php?id='.$biere->id.'&firstId='.$ind.'numClient='.$numClient.'>
          <img scr="'.$biere->photographie.'" alt="'.$biere->photographie.'" height="180" width="180">
          </a>';
          echo '</p>';
          echo '<p>';
          echo $biere->intitule;
          echo '</p>';
          echo '<p>';
          echo $biere->prix;
          echo '</p>';
          echo '</div>';
      }
      ?>
    </div>

    <div id="boutons">
      <a href="Acceuil.ctrl.php?firstId=<?php echo $indprecedent;?> &numClient= <?php echo $numClient; ?>">
        <input type="submit" name="precedent" value="Précédent">
      </a>
      <a href="Acceuil.ctrl.php?firstId=<?php echo $indsuivant;?> &numClient= <?php echo $numClient; ?>">
        <input type="submit" name="suivant" value="Suivant">
      </a>
    </div>

  </div>

</section>

</body>
</html>
