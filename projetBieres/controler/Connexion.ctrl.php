<html>
  <link rel="stylesheet" href="../view/vueConnexion.css"/>

<?php
  if ( isset($_GET["numClient"])){
    $numClient = $_GET["numClient"];
  }else {
    $numClient = -1;
  }

  include('../view/vueConnexion.php');
?>
</html>
