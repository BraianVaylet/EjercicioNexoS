<?php
  require(RAIZ . 'views/head.php');
?>
  <h5>Solución con JavaScript</h5>
  <h2>HOLA <?php echo $usuario ?></h2>

  <div class="box_form">
    <form class="" action="<?php echo RUTA; ?>mostrarJS.php" method="GET">

      <div class="box_name">
        <label for="id">Selecione un valor para la ID: </label>
        <br>
        <input id="id" type="number" name="id" min="0" max="100" value="1"> <!-- defino q se tipo numerico + valoresMIn y Max para evitarme q ingrese decimales -->
      </div>

      <input type="submit" name="enviar" class="btn" value="Enviar">

    </form>
  </div>

  <div class="box_back">
    <a href="<?php echo RUTA ?>views/cerrar.php">Cerrar Sesion y Volver</a>
  </div>

<?php
  require(RAIZ . 'views/footer.php');
?>
