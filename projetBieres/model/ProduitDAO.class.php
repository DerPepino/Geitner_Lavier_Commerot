<?php
    require_once('Produit.class.php');
class ProduitDAO {
  private $db;


  function __construct($path){

    $database = 'sqlite:'.$path.'/dataDB.db';
    try {
    $this->db = new PDO($database);
    }
    catch( PDOException $Exception ) {
        echo ''.$path;
        echo 'erreure de connection : '.$Exception->getMessage();
    }
  }

  function get(int $id):Produit {
    $sql =  'SELECT * FROM produit WHERE id='.$id;
    $tab = $this->db->query($sql);
    if ($tab == false){
      echo 'pas de valeurs trouvés dans la base de données';
      exit();
    }else {
      $result = $tab->fetchAll();

      $id = $result[0]['id'];
      $intitule = $result[0]['intitule'];
      $photographie = $result[0]['photographie'];
      $description = $result[0]['description'];
      $categorie = $result[0]['categorie'];
      $prix = $result[0]['prix'];
      $produit = new Produit($id,$intitule, $photographie,$description,$categorie,$prix);
      return $produit;
    }
  }

  function ajouterProduit(int $idClient, int $idProduit) {
    echo 'AJOUUUUUTTTTTT';
    $sql =  'INSERT INTO panier VALUES ('.$idClient.', '.$idClient.', 1)';
    $this->db->exec($sql);
  }

  function getAllCat() : array {
    $req = "SELECT * FROM client";
    $sth = $this->db->query($req);
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
 ?>
