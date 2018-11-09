<?php
  require_once('Client.class.php');
class ClientDAO
{
  private $db;
  function __construc()
  {
    //$database = 'sqlite:'.$path.'data/client.db'
    try {
      $this->db = new PDO('sqlite:data/client.db');
    }
    catch (PDOException $e){
      die("erreur de connexion:".$e->getMessage());
    }
  }
  /*function get(int $pseudo) : Client {
    $req = "SELECT * FROM client WHERE pseudo=$pseudo";
    $sth = $this->db->query($req);
    if ($sth == false){
      echo 'pas de valeurs trouvés dans la base de données';
      exit();
    }else {
      $result = $sth->fetchAll();

      $pseudo = $result[0]['pseudo'];
      $nom = $result[0]['nom'];
      $prenom = $result[0]['prenom'];
      $email = $result[0]['email'];
      $mdp = $result[0]['mdp'];
      $client = new Client($pseudo,$nom, $prenom,$email,$mdp);
      return $client;
    }
  }*/
  function getUtilisateur($pseudo) : Client {
    $req = "SELECT * FROM client WHERE pseudo=$pseudo";
    $sth = $this->db->query($req);
    $result = $sth->fetchAll(PDO::FETCH_CLASS, "Client");
    return $result[0];
  }
  function getPassword($pseudo) : STRING {
    $req = "SELECT mdp FROM client WHERE pseudo=$pseudo";
    $sth = $this->db->query($req);
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
  function getUsers() : Client {
    $req = "SELECT * FROM client";
    $sth = $this->db->query($req);
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
 ?>
