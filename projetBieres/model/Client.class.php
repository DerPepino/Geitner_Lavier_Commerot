<?php
class Client
{
  public $pseudo;
  public $nom;
  public $prenom;
  public $email;
  public $mdp;

  function __construct ($pseudo,$nom,$prenom,$email,$mdp){
    $this->pseudo = $pseudo;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->mdp = $mdp;
  }
}
 ?>
