<?php

  // LIMPIA EL CONTENIDO Q SE LE PASE:
  function limpiarDatos($valor){
      $valor = trim($valor); // ELIMINA LOS ESPACIOS EN BLANCO EN LOS EXTREMOS.
      $valor = stripslashes($valor);	// QUITA LAS '/' PARA NO INYECTAR CODIGO.
      $valor = htmlspecialchars($valor);
      return $valor;
  }

  // RETORNA LOS VALORES Q SE LE PASE DESPUES DE LIMPIAR LOS DATOS Y PASADOS A INT:
  function int_datos($valor){
      return (int)limpiarDatos($valor);
  }

  // RETORNA SI EL VALOR ES PAR O IMPAR.
  function par($valor){
    if ($valor%2==0){
       return true;
    } else {
      return false;
    }
  }
