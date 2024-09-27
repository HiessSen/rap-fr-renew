<?php
  include"composants/header.php";
  $data = file_get_contents('fichiers/artistes.json'); 
  $donnees = json_decode($data,1);
?>
  <div class="container">
    <?php
    foreach($donnees['artistes'] as $artiste){
      echo '<div.carteArtiste><h2>' . $artiste['blaze'] . '</h2>';
      echo '<p>' . $artiste['blaze'] . '</p>';
      echo '<p>' . $artiste['blaze'] . '</p></div>';
    }
    ?>
  </div>
<?php
  include"composants/footer.php";
?>