<html>
  <link rel="stylesheet" href="../view/vueProduit.css"/>

<?php
  $id = $_GET["id"];
  if ( isset($_GET["firstId"])){
    $firstId = $_GET["firstId"];
  }

  if ( isset($_GET["numClient"])){
    $numClient = $_GET["numClient"];
  }else {
    $numClient = -1;
  }

  // Récupération des données de configuration
  $config = parse_ini_file('../config/config.ini');

  // Creation de l'instace DAO
  require_once('../model/ProduitDAO.class.php');
  $rayon = new ProduitDAO($config['database_path']);

  // Récupération de l'objet biere correspondant à l'id
  $m = $rayon->get($id);

  include('../view/vueProduit.php');
?>
</html>
