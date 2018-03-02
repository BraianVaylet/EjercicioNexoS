<?php
    session_start();
    require "config.php";
    require 'funciones.php';

    $usuario = $_SESSION['usuario'];

    require(RAIZ . 'views/mostrarjs.view.php');
