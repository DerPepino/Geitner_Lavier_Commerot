<?php
  require_once('Client.class.php');
class ClientDAO
{
  private $db;
  function __construc($path)
  {
    $database = 'sqlite:'.$path.'/dataDB.db'
    try {
      $this->db = new PDO($database);
    }
    catch (PDOException $e){
      die("erreur de connexion:".$e->getMessage());
    }
  }
  function get(int $id) : Client {
    $req = "SELECT * FROM client WHERE id=$id";
    $sth = $this->db->query($req);
    if ($sth == false){
      echo 'pas de valeurs trouvés dans la base de données';
      exit();
    }else {
      $result = $sth->fetchAll();

      $id = $result[0]['id'];
      $nom = $result[0]['nom'];
      $prenom = $result[0]['prenom'];
      $email = $result[0]['email'];
      $mdp = $result[0]['mdp'];
      $client = new Client($id,$nom, $prenom,$email,$mdp);
      return $client;
    }
  }
}
 ?>
