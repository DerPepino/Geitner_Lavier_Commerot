<?php
    require_once('Music.class.php');
class MusicDAO {
  private $db;


  function __construct($path){

    $database = 'sqlite:'.$path.'/music.db';
    try {
    $this->db = new PDO($database);
    }
    catch( PDOException $Exception ) {
        echo 'erreure de connection : '.$Exception->getMessage();
    }
  }

  function get(int $id):Music {
    $sql =  'SELECT * FROM music WHERE id='.$id;
    //echo $sql . '</br>';
    $tab = $this->db->query($sql);
    if ($tab == false){
      echo 'pas de valeurs trouvés dans la base de données';
      exit();
    }else {
      $result = $tab->fetchAll();

      $id = $result[0]['id'];
      $author = $result[0]['author'];
      $title = $result[0]['title'];
      $cover = $result[0]['cover'];
      $mp3 = $result[0]['mp3'];
      $category = $result[0]['category'];
      $music = new Music($id,$author, $title,$cover,$mp3,$category);
      //var_dump($music);
      return $music;
    }
  }

}
 ?>
