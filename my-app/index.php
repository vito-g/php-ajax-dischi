<?php

  // è il php dedicato al frontend (alla view)

  // per la prima milestone
  require_once __DIR__ . '/database/database.php';

  print_r($dischi);



  // qui a questo punto possiamo creare (per la prima milestone) tutto il nostro html e ciclare i nostri dischi (sempre in php)
  // e stampare copertina, titolo e così via, come da screenshot.
?>

<?php

  foreach($dischi as $disco) {
?>

  <div class="container">
    

    <div class="copertina">
      <?php echo $dischi['copertina']; ?>
    </div>

    <div class="titolo">
      <?php echo $dischi['titolo']; ?>
    </div>

    <div class="autore">
      <?php echo $dischi['autore']; ?>
    </div>

    <div class="anno">
      <?php echo $dischi['anno']; ?>
    </div>


  </div>

<?php
  }
?>
