<?php
    session_start(); // PARA TRABAJAR CON SESIONES.
    require "config.php"; // ARCHIVO CON LAS RUTAS.
    require 'funciones.php'; // ARCHIVO CON FUNCIONES.

    $error_usuario = '';

    // LEVANTO VALORES DEL FORM.
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = limpiarDatos(filter_var($_POST['usuario']),FILTER_SANITIZE_STRING); // LEVANTO EL VALOR DEL FORM.

        if (empty($usuario)) { // CASO EN EL QUE NO INGRESE UN USUARIO.
          $error_usuario .= '### Por favor complete el campo USUARIO ###';
        } else {
          $_SESSION['usuario'] = $usuario; // CREO UNA SESION PARA LLEVARME EL NOMBRE DEL USUARIO.
          header('Location: menu.php');
        }
    }

    require(RAIZ . 'views/index.view.php');
