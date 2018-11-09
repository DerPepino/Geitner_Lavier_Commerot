<html>
  <link rel="stylesheet" href="../view/vueInscription.css"/>

<?php

  if ( isset($_GET["numClient"])){
    $numClient = $_GET["numClient"];
  }else {
    $numClient = -1;
  }

  include('../view/vueInscription.php');
?>
</html>
