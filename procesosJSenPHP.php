<?php
    session_start();
    require "config.php";
    require 'funciones.php';

    $usuario = $_SESSION['usuario'];

    // Tengo q encontrar la forma de traer la variable valor_id para poder procesarla con php.
    // y guardarla y mostrarla como en la solucion con PHP.

    $valorId = $_REQUEST['valorId'];
    $valorAux = $_REQUEST['valorAux'];
    $resultado = $valorId + $valorAux;

    // DEFINO ALGUNAS VARIABLES AUXILIARES.
    $id_ok = '';
    $contador = 0;

      if ($valorAux == 2) {
        $id_ok = $valorId;
      }

      // GUARDO LOS ID QUE CUMPLAN LAS CONDICIONES EN UN ARRAY.
      $valor_ok = $_SESSION['valores_ok'] ? (array) $_SESSION['valores_ok'] : null;
      $valor_ok[] = $id_ok;
      $_SESSION['valores_ok'] = $valor_ok;

    foreach ((array)$_SESSION['valores_ok'] as $key => $value) {

        if (!empty($value)) {  // SOLO MUESTRO LOS VALORES SI NO HAY ERROR.
            $contador++; // USO UN CONTADOR PARA NO MOSTRAR MAS DE 10 ELEMENTOS.

          if ($contador < 11) {
              echo 'Ingresé al array y tengo el ID: ' . $value . '<br/>';
           };
        }
    }

?>
