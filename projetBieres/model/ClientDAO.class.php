<<?php
class ClientDAO
{
  private $db;
  function __construc($path)
  {
    $database = 'sqlite:'.$path.'/client.db'
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
    $result = $sth->fetchAll(PDO::FETCH_CLASS, "Client");
    return $result[0];
  }
}
 ?>
