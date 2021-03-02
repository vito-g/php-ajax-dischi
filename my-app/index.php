<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>



<?php

  // è il php dedicato al frontend (alla view)

  // per la prima milestone
  require_once __DIR__ . '/database/database.php';


  // print_r($dischi);



  // qui a questo punto possiamo creare (per la prima milestone) tutto il nostro html e ciclare i nostri dischi (sempre in php)
  // e stampare copertina, titolo e così via, come da screenshot.
?>

<?php
  foreach($dischi as $disco) {
?>

  <div class="container">


    <img src="<?php echo $disco['copertina']; ?>" />

    <div class="titolo">
      <?php echo $disco['titolo']; ?>
    </div>

    <div class="autore">
      <?php echo $disco['autore']; ?>
    </div>

    <div class="anno">
      <?php echo $disco['anno']; ?>
    </div>


  </div>

<?php
  }
?>

</body>
</html>
