<?php
    session_start();
    require "config.php";
    require 'funciones.php';

    $usuario = $_SESSION['usuario'];

    // Tengo q encontrar la forma de traer la variable valor_id para poder procesarla con php.
    // y guardarla y mostrarla como en la solucion con PHP.



  require(RAIZ . 'views/mostrarjs.view.php');
