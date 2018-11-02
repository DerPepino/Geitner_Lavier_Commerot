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

  // Récupération de l'objet musique correspondant à l'id
  $m = $rayon->get($id);

  // Construction de l'URL de la musique
  //$music = $config['data_url'].'/mp3/'.$m->mp3;
  //$cover = $config['data_url'].'/img/'.$m->cover;


  include('../view/vueProduit.php');
?>
</html>
