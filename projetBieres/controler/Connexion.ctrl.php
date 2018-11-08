<?php
  require_once("../model/Client.class.php");
  require_once("../model/ClientDAO.class.php");
  global $erreur;
  $connect=false;
  $database = new DAO();
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
