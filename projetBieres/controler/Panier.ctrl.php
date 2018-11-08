<html>
  <link rel="stylesheet" href="../view/vuePanier.css"/>

<?php
require_once('../model/ProduitDAO.class.php');
require_once('../model/Produit.class.php');


if ( isset($_GET["numClient"])){
  $numClient = $_GET["numClient"];
}else {
  $numClient = -1;
}

$config = parse_ini_file('../config/config.ini');
$rayon = new ProduitDAO($config['database_path']);


for ($i=1;$i<5;$i++){
  $m = $rayon->get($i);
  $lesProduits[$i] = $m;
}

include('../view/vuePanier.php');

 ?>
 </html>
