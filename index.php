<?php
    session_start(); // PARA TRABAJAR CON SESIONES.
    require "config.php"; // ARCHIVO CON LAS RUTAS -------------> Tener en cuenta al correr el script
    require 'funciones.php'; // ARCHIVO CON FUNCIONES de PHP.

    $error_usuario = '';

    // LEVANTO VALORES DEL FORM.
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = limpiarDatos(filter_var($_POST['usuario']),FILTER_SANITIZE_STRING); // LEVANTO EL VALOR DEL FORM y USO FILTRO EL VALOR.

        if (empty($usuario)) { // CASO EN EL QUE NO INGRESE UN USUARIO.
          $error_usuario .= '### Por favor complete el campo USUARIO ###';
        } else {
          $_SESSION['usuario'] = $usuario; // CREO UNA SESION PARA LLEVARME EL NOMBRE DEL USUARIO A OTROS ARCHIVOS.
          header('Location: menu.php');
        }
    }

    require(RAIZ . 'views/index.view.php'); // CARGO EL ARCHIVO CON LA VISTA. 
