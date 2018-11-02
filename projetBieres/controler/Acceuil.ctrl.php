<?php
require_once('../model/ProduitDAO.class.php');
require_once('../model/Produit.class.php');

if ( isset($_GET["firstId"]) && $_GET["firstId"]>0 ){
  $ind = $_GET["firstId"];
}else {
  $ind = 1;
}


$config = parse_ini_file('../config/config.ini');
$jukebox = new ProduitDAO($config['database_path']);


for ($i=$ind;$i<$ind+15;$i++){
  $m = $jukebox->get($i);
  $lesProduits[$i] = $m;
}

include('../view/vueAcceuil.php');

 ?>
