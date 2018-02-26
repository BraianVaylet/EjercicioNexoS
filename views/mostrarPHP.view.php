<?php
  require(RAIZ . 'views/head.php');
?>
  <div class="box_name_id">
    <h4><?php echo $usuario; ?>, tu último valor ingresado es: <span class="imp"><?php echo $id; ?></span></h4>
  </div>

  <div class="box_name_id">
    <h4>Lista de valores aceptados:</h4>
    <ul>
      <?php
          foreach ((array)$_SESSION['valores_ok'] as $key => $value){
            if (!empty($value)) { ?>
              <li> <?php echo 'Ingresé al array y tengo el ID: ' . $value . '<br/>'; ?> </li>
          <?php  }
          }
      ?>
    </ul>
  </div>

  <!-- MUESTRO ERRORES -->
  <?php if(!empty($error)): ?>
    <div class="box_error">
      <h4>Error!!!</h4>
      <ul>
        <p class="error"><?php echo $error; ?></p>
      </ul>
    </div>
  <?php endif; ?>

  <a class="continuar" href="ejemploPHP.php">Continuar</a>


<?php
  require(RAIZ . 'views/footer.php');
?>
