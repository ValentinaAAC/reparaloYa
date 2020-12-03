$(document).ready(function(){

    // Convertir todos los vínculos con la clase de progress-button a
    // botones reales con medidores de progreso.
    // Es necesario llamar a esta función una vez que se carga la página.
    // Si agrega botones más tarde, tendrá que llamar a la función sólo para ellos.
    $(".progress-button").progressInitialize();

    // Al hacer click en los tres primeros botones iniciamos la animación

    $("#submitButton").click(function(e){
        e.preventDefault();

        // Especificamos el tiempo para la barra de progreso

        $(this).progressTimed(2);
    });

    $("#actionButton").click(function(e){
        e.preventDefault();
        $(this).progressTimed(2);
    });

    $("#generateButton").one("click", function(e){
        e.preventDefault();

        // recogemos la llamada

        var button = $(this);
        button.progressTimed(3, function(){

// En esta llamada, se puede establecer el atributo href del botón 
// a la dirección URL del archivo generado. Para la demostración, sólo 
// mostramos un mensaje a través de un alert
            button.click(function(){
                alert("Showing how a callback works!");
            });
        });
    });

    // Manejo de progreso personalizado

    var controlButton = $("#controlButton");

    controlButton.click(function(e){
        e.preventDefault();

        // Opcionalmente Usted puede llamar a la función progressStart. 
        // Se simulará la actividad cada 2 segundos si el 
        // indicador de progreso no se ha incrementado

        controlButton.progressStart();
    });

    $(".command.increment").click(function(){

        // Incrementar la barra de progreso con un 10%. Podemos pasar un número 
        // diferente como argumento para incrementar esa cantidad.
        controlButton.progressIncrement();
    });

    $(".command.set-to-1").click(function(){

        // Establecer el indicador de progreso con el porcentaje especificado

        controlButton.progressSet(1);
    });

    $(".command.set-to-50").click(function(){
        controlButton.progressSet(50);
    });

    $(".command.finish").click(function(){

         // Establecer el contador de avance al 100% y mostrar el texto Done!.        
            controlButton.progressFinish();
    });

});

// La funcionalidad del contador de avance se encuentra disponible como una serie de plugins. 
// Usted puede poner este código en un archivo separado si desea mantener las cosas ordenadas.
(function($){

    // Creación de un número de plugins jQuery que puede utilizar para 
    // inicializar y controlar los indicadores de progreso.
    $.fn.progressInitialize = function(){

        // Esta función inicializa el progreso y establece el detector de eventos


        return this.each(function(){

            var button = $(this),
                progress = 0;

            // Establecemos los atributos por defecto de los botones

            var options = $.extend({
                type:"background-horizontal",
                loading: "Loading..",
                finished: "Done!"
            }, button.data());

            // Añadimos los atributos de los elementos para que nuestro CSS los use para mostrar los mensajes
            button.attr({"data-loading": options.loading, "data-finished": options.finished});

            // Añádimos el progreso a la barra del botón
            var bar = $("<span class="tz-bar " + options.type + "">").appendTo(button);

            // El evento progress llama a la actualización de la barra de progreso
            button.on("progress", function(e, val, absolute, finish){

                if(!button.hasClass("in-progress")){

                    // Una vez ha terminado el progreso debemos reinicializar 
                    // el progreso y eliminar algunas clases que puedan haber quedado

                    bar.show();
                    progress = 0;
                    button.removeClass("finished").addClass("in-progress")
                }

                if(absolute){
                    progress = val;
                }
                else{
                    progress += val;
                }

                if(progress >= 100){
                    progress = 100;
                }

                if(finish){

                    button.removeClass("in-progress").addClass("finished");

                    bar.delay(500).fadeOut(function(){

                        // Desencadena el evento progress-finish personalizado
                        button.trigger("progress-finish");
                        setProgress(0);
                    });

                }

                setProgress(progress);
            });

            function setProgress(percentage){
                bar.filter(".background-horizontal,.background-bar").width(percentage+"%");
                bar.filter(".background-vertical").height(percentage+"%");
            }

        });

    };

    // ProgressStart simula la actividad en el indicador de progreso. Llámalo primero, 
    // si el progreso tarda mucho en finalizar.
    $.fn.progressStart = function(){

        var button = this.first(),
            last_progress = new Date().getTime();

        if(button.hasClass("in-progress")){
             //! No arranque por segunda vez
            return this;
        }

        button.on("progress", function(){
            last_progress = new Date().getTime();
        });

        // Cada medio segundo chequeo si el progreso 
        // se ha incrementado en los dos últimos segundos
        var interval = window.setInterval(function(){

            if( new Date().getTime() > 2000+last_progress){

           // No ha habido ninguna actividad durante dos segundos. Incrementamos la barra de progreso 
            // un poco para mostrar que algo está pasando
                button.progressIncrement(5);
            }

        }, 500);

        button.on("progress-finish",function(){
            window.clearInterval(interval);
        });

        return button.progressIncrement(10);
    };

    $.fn.progressFinish = function(){
        return this.first().progressSet(100);
    };

    $.fn.progressIncrement = function(val){

        val = val || 10;

        var button = this.first();

        button.trigger("progress",[val])

        return this;
    };

    $.fn.progressSet = function(val){
        val = val || 10;

        var finish = false;
        if(val >= 100){
            finish = true;
        }

        return this.first().trigger("progress",[val, true, finish]);
    };

    // Esta función crea una barra de progreso que 
    // termina en un período de tiempo especificado.

    $.fn.progressTimed = function(seconds, cb){

        var button = this.first(),
            bar = button.find(".tz-bar");

        if(button.is(".in-progress")){
            return this;
        }

        // Establecemos la transición para la duración del progreso.
        // CSS hará el trabajo de animación de la barra de progreso

        bar.css("transition", seconds+"s linear");
        button.progressSet(99);

        window.setTimeout(function(){
            bar.css("transition","");
            button.progressFinish();

            if($.isFunction(cb)){
                cb();
            }

        }, seconds*1000);
    };

})(jQuery);