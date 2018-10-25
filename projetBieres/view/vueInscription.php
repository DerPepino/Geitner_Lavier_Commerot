<html>
<head>
  <meta charset="utf-8">
  <title>BièresAGogo.com</title>
  <link rel="stylesheet" href="vueInscription.css"/>

</head>
<body>

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

</div>

<form method="post" action="traitement.php">
  <fieldset>
    
    <legend>Inscription</legend>

    <label for="nom">Nom :</label>
</br>
    <input type="text" name="nom" id="nom"/>
</br>
</br>
    <label for="prenom">Prénom :</label>
</br>
    <input type="text" name="prenom" id="prenom"/>
</br>
</br>
<label for="date">Date de naissance :</label>
</br>
<input type="date" name="date" id="date"/>
</br>
</br>
    <label for="mail">Adresse email :</label>
</br>
    <input type="text" name="mail" id="mail"/>
</br>
</br>
    <label for="mdp">Mot de passe :</label>
</br>
    <input type="text" name="mdp" id="mdp"/>
</br>
</br>
    <label for="cmdp">Confirmer votre mot de passe :</label>
</br>
    <input type="text" name="cmdp" id="cmdp"/>

  </fieldset>
</form>
</body>
</html>
