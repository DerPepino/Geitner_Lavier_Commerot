<html>
  <link rel="stylesheet" href="../view/vueProduit.css"/>

<?php
  $id = intval($_GET["id"]);
  if ( isset($_GET["firstId"])){
    $firstId = $_GET["firstId"];
  }

  if ( isset($_GET["numClient"])){
    $numClient = intval($_GET["numClient"]);
  }else {
    $numClient = -1;
  }

  // Récupération des données de configuration
  $config = parse_ini_file('../config/config.ini');

  // Creation de l'instace DAO
  require_once('../model/ProduitDAO.class.php');
  $rayon = new ProduitDAO($config['database_path']);

  if ($numClient != -1){
    if ( isset($_GET["ajout"])){
      $rayon->ajouterProduit(2, $id);
    }
  }

  // Récupération de l'objet biere correspondant à l'id
  $m = $rayon->get($id);

  include('../view/vueProduit.php');
?>
</html>
