<?php
class Produit
{
  public $id;
  public $intitule;
  public $photographie;
  public $description;
  public $categorie;
  public $prix;

  function __construct ($id,$intitule,$photographie,$description,$categorie,$prix){
    $this->id = $id;
    $this->intitule = $intitule;
    $this->photographie = $photographie;
    $this->description = $description;
    $this->categorie = $categorie;
    $this->prix = $prix;
  }

}
 ?>
