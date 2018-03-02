$(function() {

    var url_search,
        a,
        valor,
        id,
        valor_id,
        aux = 0; // variable auxiliar para ayudarme a si cumple con las dos condiciones.

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

    // NECESITO ENVIAR ALGUNA VARIABLE (valor_id) A UN ARCHIVO ".PHP" PARA PODER GUARDARLO EN UN ARRAY Y LUEGO PODER MOSTRARLO.
    // OPCIONES PARA HACERLO: CON AJAX -- [NO ME SALE!]

    function jquery_a_php(valorId, valorAux){
            var parametros = {
                    "valorId" : 2,
                    "valorAux" : 1
            };
            alert("funciona!");
            $.ajax({
                    data:  parametros,
                    url:   'http://localhost/NexoSmart/EjercicioNexoS/procesosJSenPHP.php',
                    type:  'post',
                    dataType: "html",
                    beforeSend: function () {
                            $("#resultado").html("Procesando, espere por favor...");
                    },
                    success:  function (response) {
                            alert("Ha sido ejecutada la acción.");
                            $("#resultado").html(response);
                    }
            });
    }
});
