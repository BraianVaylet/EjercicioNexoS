<?php
    session_start();
    require "config.php";
    $usuario = $_SESSION['usuario'];

    if (!isset($_SESSION['valores_ok'])) { // SI NO SE SETEA LA SESION valores_ok SE LE ASIGNA UN ARRAY VACIO.
      $_SESSION['valores_ok'] = array();
    }

    require(RAIZ . 'views/ejemploPHP.view.php');
