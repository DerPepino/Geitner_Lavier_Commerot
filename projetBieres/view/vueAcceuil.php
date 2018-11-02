<html>
<head>
  <meta charset="utf-8">
  <title>BièresAGogo.com</title>
  <link rel="stylesheet" href="vueAcceuil.css"/>

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
        <input type="text" name="pseudo" placeholder="Rechercher"/>
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

  <div id="stand">
    <?php
    //foreach ($liste as $id => $url) {
    /*echo '<a href="play.ctrl.php?id='.$id.'&firstId='.$ind.'">
      <img scr="'.$url.'" alt="'.$url.'" height="200" width="200">
      </a>';
    }*/
    for ($i=0; $i < 15; $i++) {
      echo '<div <div class="prod">';
      echo '<p>';
      echo '<a href="play.ctrl.php?id=1&firstId=5">
        <img scr="images/logoBeerHouse.jpg" height="180" width="180">
        </a>';
      echo '</p>';
      echo '<p align="center">';
      echo 'Voici le prix';
      echo '</p>';
      echo '</div>';
    }

    ?>

  </div>

</section>

</body>
</html>
