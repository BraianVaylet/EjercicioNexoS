<?php
    session_start();
    require "config.php";
    $usuario = $_SESSION['usuario'];
    require(RAIZ . 'views/menu.view.php');
