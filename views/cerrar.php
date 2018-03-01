<?php
  session_start();
  session_destroy(); // cierro
  header('Location: ../index.php'); // vuelvo al index
?>
