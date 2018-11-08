<?php
<<<<<<< HEAD
=======
  /*if ( isset($_GET["numClient"])){
    $numClient = $_GET["numClient"];
  }else {
    $numClient = -1;
  }*/

  //include('../view/vueConnexion.php');
>>>>>>> bf10097fa8268bb11996c96df67fa2510bf32187
  require_once("../model/Client.class.php");
  require_once("../model/ClientDAO.class.php");
  global $erreur;
  $connect=false;
  $database = new ClientDAO();
  $user = $_POST['pseudo'];
  $allusers=$database->getUsers();
  $know=false;
  foreach ($allusers as $value) {
    if ($user == $value['pseudo']){
      $know=true;
    }
  }
  if ($know) {
    $thisuser=$database->getUtilisateur($user);
    $mdp = $_POST['mdp'];
    if ($thisuser->getPassword()!=$mdp){
      $erreur="Mot de passe incorrect";
    }
  } else {
    $erreur="Nom d'utilisateur inconnue";
  }
  if (isset($erreur)){
    include('../view/vueConnexion.php');
  } else {
    $connect=true;
    include('../view/vueAcceuil.php');
  }
?>
