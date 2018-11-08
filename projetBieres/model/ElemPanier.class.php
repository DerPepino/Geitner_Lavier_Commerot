<?php
class ElemPanier
{
  public $idProduit;
  public $quantite;

  function __construct ($idProduit, $quantite){
    $this->idProduit = $idProduit;
    $this->quantite = $quantite;
  }

}
 ?>
