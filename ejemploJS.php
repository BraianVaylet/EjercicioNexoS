<?php
    session_start();
    require "config.php";
    $usuario = $_SESSION['usuario'];

    if (!isset($_SESSION['valores_ok'])) {
      $_SESSION['valores_ok'] = array();
    }

    require(RAIZ . 'views/ejemploJS.view.php');
