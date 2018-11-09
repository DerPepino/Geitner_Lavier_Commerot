<html>
  <link rel="stylesheet" href="../view/vuePanier.css"/>

<?php
require_once('../model/ProduitDAO.class.php');
require_once('../model/Produit.class.php');
require_once('../model/PanierDAO.class.php');
require_once('../model/ElemPanier.class.php');


if ( isset($_GET["numClient"])){
  $numClient = $_GET["numClient"];
}else {
  $numClient = 2;
}

$config = parse_ini_file('../config/config.ini');
$rayon = new ProduitDAO($config['database_path']);
$panier = new PanierDAO($config['database_path']);

if ($numClient != -1){
  $p = $panier->MonPanier($numClient);
  foreach ($p as $i => $elem) {
    $lesProduits[$i] = $rayon->get($elem->idProduit);
    $lesQuantités[$i] = $elem->quantite;
  }
  include('../view/vuePanier.php?numClient='.$numClient);
}else {
  include('Connexion.ctrl.php?numClient='.$numClient);
}
 ?>
 </html>
