<?php
  require(RAIZ . 'views/head.php');
?>
  <div class="box_name_id">
    <h4><?php echo $usuario; ?>, tu último valor ingresado es: </h4>
  </div>

  <div class="box_name_id">
    <h4>Lista de valores aceptados:</h4>
    <p id="resultado">

    </p>
  </div>

  <div class="box_error">
    <ul id="mostrar_errorjs">
      <p class="error"></p>
    </ul>
  </div>

  <a class="continuar" href="ejemploJS.php">volver</a>

<?php
  require(RAIZ . 'views/footer.php');
?>

  <!-- // script de JavaScript en archivo funciones.js -->

  </body>
</html>
