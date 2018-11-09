<?php
    require_once('ElemPanier.class.php');
class PanierDAO {
  private $db;


  function __construct($path){

    $database = 'sqlite:'.$path.'/dataDBB.db';
    try {
    $this->db = new PDO($database);
    }
    catch( PDOException $Exception ) {
        echo ''.$path;
        echo 'erreure de connection : '.$Exception->getMessage();
    }
  }

  function MonPanier(int $id):array {
    $sql =  'SELECT * FROM panier WHERE idClient='.$id;
    $tab = $this->db->query($sql);
    if ($tab == false){
      echo 'pas de valeurs trouvés dans la base de données';
      exit();
    }else {
      $result = $tab->fetchAll();


      foreach ($result as $i => $elem) {
        $idProduit = $elem['idProduit'];
        $quantite = $elem['quantite'];
        $MonPanier[$i] = new ElemPanier($idProduit,$quantite);
      }
      return $MonPanier;
    }
  }

  function supprimerProduit(int $idClient, int $idProduit) {
    echo 'SUPPRESSSIIIOOONNN';
    $sql =  'DELETE FROM panier WHERE idClient='.$idClient.' AND idProduit ='. $idProduit;
    $tab = $this->db->query($sql);
  }

}
 ?>
