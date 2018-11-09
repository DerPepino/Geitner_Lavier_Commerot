<html>
<link rel="stylesheet" href="../view/vueConnexion.css"/>


<?php

  if ( isset($_GET["numClient"])){
    $numClient = $_GET["numClient"];
  }else {
    $numClient = -1;
  }

  //include('../view/vueConnexion.php');
  require_once("../model/Client.class.php");
  require_once("../model/ClientDAO.class.php");
  /*global $erreur;
  $connect=false;
  $database = new ClientDAO();*/
  if ( isset($_POST['id']) ){
    $numClient = $_POST['id'];
  }

  /*$allusers=$database->getUsers();
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
    //include('../view/vueConnexion.php?numClient='.$numClient);
    include('../view/vueConnexion.php');
  } else {
    $connect=true;
    //include('../view/vueAcceuil.php?numClient='.$thisuser->pseudo);
    include('../view/vueAcceuil.php');
    include('../view/vueConnexion.php');
  } else {
    $connect=true;
    include('Acceuil.ctrl.php');*/
    include('../view/vueConnexion.php');

?>
</html>
