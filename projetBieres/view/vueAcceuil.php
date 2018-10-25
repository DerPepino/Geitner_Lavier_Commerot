<html>
<head>
  <meta charset="utf-8">
  <title>BièresAGogo.com</title>
  <link rel="stylesheet" href="vueAcceuil.css"/>

</head>
<body>

<<<<<<< HEAD
<div>
 <img src="logoBeerHouse.jpg">
 <h1>BièresAGogo.com</h1>
  <ul>
    <li><a href="#0">Nouveautés</a></li>
    <li><a href="#1">Catégories</a></li>
    <li><a href="#2">Mon panier</a></li>
    <li><a href="#3">Se connecter</a></li>
    <li><a href="#4">S'inscrire</a></li>
  </ul>
=======
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
      <img scr="logoBeerHouse.jpg" height="30" width="30">
      </a>';
    //}
    ?>
  </div>

>>>>>>> 43db84a703b7dbc308db8c0df0f7a7a214416ef3

</div>

</body>
</html>
