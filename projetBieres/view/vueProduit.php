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
            echo '<p>'.$m->prix.' € </p>';
          ?>
          <input type="button" name="ajouterPanier" value="Ajouter au panier" onclick="$rayon->ajouterProduit(2, <?php echo $m->id; ?>)" />
        </div>
      </div>
    </section>

  </section>
</body>
</html>
