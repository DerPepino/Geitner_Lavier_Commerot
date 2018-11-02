<?php
class Client
{
  public $id;
  public $nom;
  public $prenom;
  public $email;
  public $mdp;

  function __construct ($id,$nom,$prenom,$email,$mdp){
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->mdp = $mdp;
  }
}
 ?>
