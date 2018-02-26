<?php
  require(RAIZ . 'views/head.php');
?>

  <div class="box_form">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="" name="login" id="formulario">
      <div class="box_name">
          <label for="usuario">Ingrese su nombre de usuario: </label>
          <br>
          <input id="usuario" type="text" name="usuario" placeholder=" Usuario">
      </div>

      <div class="box_error">
        <!-- ERROR -->
        <?php if(!empty($error_usuario)): ?>
          <p class="" id="error_usuario"><?php echo $error_usuario; ?></p>
        <?php endif; ?>
      </div>

      <input type="submit" class="btn" name="enviar" value="Enviar">
    </form>
  </div>

<?php
  require(RAIZ . 'views/footer.php');
?>
