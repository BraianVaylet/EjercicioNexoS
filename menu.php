<?php
    session_start();
    require "config.php"; 
    $usuario = $_SESSION['usuario']; // CARGO LA VARIABLE GUARDADA EN LA SESION USUARIO
    require(RAIZ . 'views/menu.view.php');
