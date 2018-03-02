<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="description" content="Ejercicio de PHP y JavaScript para NexoSmart" />
    <meta name="keywords" content="PHP, JavaScript, NexoSmart" />
    <meta name="author" content="Braian D. Vaylet" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo RUTA; ?>/css/icono.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function jquery_a_php(valorId, valorAux){
          var url_search,
              a,
              valor,
              id,
              valor_id,
              aux = 0, // variable auxiliar para ayudarme a si cumple con las dos condiciones.

        //OBTENGO LA URL:
          url_search = window.location.search, // guardo el search de la url en una variable.
          a = $('<a>',{ href: url_search }); //anchor tag

        // SEGMENTO LA URL:
          valor = a.prop('search').split("&"); // para obtener el query string de la URL actual, y lo cortamos en "&".
          id = valor[0]; // me quedo solo con el primer elemento del arreglo valor[].
          valor_id = id.split("=")[1];  // corto en "=" y me quedo con el segundo elemento del arreglo, de esta manera me quedo con el valor que necesito.
          console.log("valor obtenido desde la URL: " + valor_id); // muestro valor.

        // CONDICIONES:
          if (valor_id < 2) { // si el valor es menor a 2.
            console.log("todo mal, el valor ingresado es menor a 1");
            $('#mostrar_errorjs').html('<li>Error, el valor ingresado es menor a 2 o impar</li>');
          } else {
            console.log("todo ok!, el valor ingresado es mayor o igual a 2");
            aux = aux + 1;
          }

          if (valor_id%2 !== 0) { // si el valor es par o impar.
            console.log("todo mal, el valor ingresado es impar");
            $('#mostrar_errorjs').html('<li>Error, el valor ingresado es menor a 2 o impar</li>');
          } else {
            console.log("todo ok!, el valor ingresado es par");
            aux = aux + 1;
          }

          if (aux == 2) {
            console.log("super!, cumple con las condiciones!");
          }

          // USO AJAX PARA MANDAR LA VARIABLE A PHP.
          var parametros = {
                    "valorId" : valor_id,
                    "valorAux" : aux
              };

          $.ajax({
                  data:  parametros,
                  url:   'http://localhost/NexoSmart/EjercicioNexoS/procesosJSenPHP.php',
                  type:  'post',
                  dataType: "html",
                  beforeSend: function () {
                          $("#resultado").html("Procesando, espere por favor...");
                  },
                  success:  function (response) {
                            $("#resultado").html(response);
                  }
          });
        }
    </script>

    <title>NexoSmart</title>
  </head>
  <body>
    <div class="box_mother">

      <div class="box_titulo_principal">
        <h1>NexoSmart</h1>
      </div>

      <div class="box_name_id">
        <h4><?php echo $usuario; ?>, tu último valor ingresado es: </h4>
      </div>

      <input class="continuar" type="button" href="javascript:;" onclick="jquery_a_php();return false;" value="Mostrar"/>

      <div class="box_name_id">
        <h4>Lista de valores aceptados:</h4>
        <span id="resultado"></span>
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
