$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
    $("#botonenviar").click( function() { 
    console.log("pulso boton");
    console.log($("#formdata").find("select,textarea, input").serialize());   // Con esto establecemos la acción por defecto de nuestro botón de enviar.
                                     // Primero validará el formulario.
            $.post("?view=regRestaurant",$("#formdata").serialize(),function(res){
                console.log(res);
      // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
                if(res == 1){
                    $("#mensaje").html( "<p>Registrado. <em>Correctamente!</em></p>" );    // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
                } else {
                   $("#mensaje").innerHTML = "Ocurrio un error!";     // Si no, lo mismo, pero haremos aparecer el div "fracaso"
                }
            });
        
    });    
});