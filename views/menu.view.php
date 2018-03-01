<?php
  // SALUDO AL USUARIO Y PERMITO ESCOGER UNA SOLUCION.
  require(RAIZ . 'views/head.php');
?>

  <h2>Bienvenido <?php echo $usuario ?></h2>
  <p>Seleccione una de las dos soluciones:</p>

  <div class="box_enlaces">
    <a href="<?php echo RUTA ?>ejemploPHP.php">PHP</a>
    <a href="<?php echo RUTA ?>ejemploJS.php">JavaScript</a>
  </div>

  <div class="box_back">
    <!-- // PARA CERRAR LA SESION DE ESTE USUARIO. -->
    <a href="<?php echo RUTA ?>views/cerrar.php">Cerrar Sesion y Volver</a>
  </div>

<?php
  require(RAIZ . 'views/footer.php');
?>
  </body>
</html>
