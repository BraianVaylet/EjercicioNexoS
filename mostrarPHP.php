<?php
    session_start();
    require "config.php";
    require 'funciones.php';

    $usuario = $_SESSION['usuario'];
    $error = '';
    $id_ok = '';

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $id = int_datos(filter_var($_GET['id']),FILTER_SANITIZE_NUMBER_FLOAT);

      //==CONDICIONES==
      if (!par($id)) {  // RETORNA SI EL VALOR ES PAR O IMPAR.
        $error .= "el numero ingresado es impar <br>";
      }

      if ($id < 2) { // RETORNA SI EL VALOR NO ES MAYOR O IGUAL A 2.
        $error .= "el numero ingresado es menor a 2";
      }

      if (empty($error)) {
        $id_ok = $id;
      }

      $valor_ok = $_SESSION['valores_ok'] ? (array) $_SESSION['valores_ok'] : null; //??????
      $valor_ok[] = $id_ok;
      $_SESSION['valores_ok'] = $valor_ok;
    }

  require(RAIZ . 'views/mostrarPHP.view.php');
