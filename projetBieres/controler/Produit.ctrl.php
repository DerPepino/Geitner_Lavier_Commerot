<html>
  <link rel="stylesheet" href="../view/vueProduit.css"/>

<?php
  $id = $_GET["id"];
  $firstId = $_GET['firstId'];

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
