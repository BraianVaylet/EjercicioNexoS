<?php
  require(RAIZ . 'views/head.php');
?>
  <h5>Solución con PHP</h5>
  <h2>HOLA <?php echo $usuario ?></h2>

  <div class="box_form">
    <!-- // MANDO LA VARIABLE POR URL MEDIANTE EL METODO GET A OTRO ARCHIVO ".PHP" -->
    <form class="" action="<?php echo RUTA; ?>mostrarPHP.php" method="GET">

      <div class="box_name">
        <label for="id">Selecione un valor para la ID: </label>
        <br>
        <input id="id" type="number" name="id" min="0" max="100" value="1">
        <!-- USANDO HTML, LO DEFINO NUMERICO CON UN MÍNIMO Y MAXIMO : IMPIDO QUE INGRESE ALGUN STRING -->
      </div>

      <input type="submit" name="enviar" class="btn" value="Enviar">

    </form>
  </div>

  <div class="box_back">
    <a href="<?php echo RUTA ?>views/cerrar.php">Cerrar Sesion y Volver</a>
    <a href="<?php echo RUTA ?>menu.php">Volver</a> <!-- VUELVO A LA PAGINA ANTERIOR -->
  </div>

<?php
  require(RAIZ . 'views/footer.php');
?>
  </body>
</html>
