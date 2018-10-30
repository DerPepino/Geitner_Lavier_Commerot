<html>
<head>
  <meta charset="utf-8">
  <title>BièresAGogo.com</title>
  <link rel="stylesheet" href="vueAcceuil.css"/>

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

    <div id="presentation">
      <div id="img">
        <image src="ImageProduit.jpeg" height="200" width="200px">
      </div>
      <div id="description">
        <p>Intitulé</p>
        <p>complément d'info</p>
        <p>reference</p>
      </div>
      <div id="caracteristique">
        <p>pleins de caracteristiques</p>
      </div>
      <div id="prix">
        <p>voici le prix</p>
        <input type="submit" name="ajouterPanier" value="Ajouter au panier" onclick="fonction();" >
      </div>
    </div>

  </section>
</body>
</html>
