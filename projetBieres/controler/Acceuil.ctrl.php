<html>
  <link rel="stylesheet" href="../view/vueAcceuil.css"/>

<?php
require_once('../model/ProduitDAO.class.php');
require_once('../model/Produit.class.php');

global $connect;
if ( isset($_GET["firstId"]) && $_GET["firstId"]>0 ){
  $ind = $_GET["firstId"];
}else {
  $ind = 1;
}
$indsuivant = $ind +15;
if ($ind-15>0) {
  $indprecedent = $ind-15;
}else {
  $indprecedent = 1;
}

if ( isset($_GET["numClient"])){
  $numClient = $_GET["numClient"];
}else {
  $numClient = -1;
}


$config = parse_ini_file('../config/config.ini');
$rayon = new ProduitDAO($config['database_path']);


for ($i=$ind;$i<$ind+5;$i++){
  $m = $rayon->get($i);
  $lesProduits[$i] = $m;
}

include('../view/vueAcceuil.php');

 ?>
 </html>
