<?php

  // CIERRO LA SESION QUE TENGA ABIERTA.
  session_start();
  session_destroy(); // cierro
  header('Location: ../index.php'); // vuelvo al index
?>
