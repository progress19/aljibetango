$(document).ready(function(){

/* FORM ENCUESTA */

    $("#frmEncuesta").validate({
        event: "blur",
        rules: {'nombre': "required",'email': "required email",'idPais':'required'},
        messages: {
            'nombre': $('#msg_nombre').val(),
            'email': $('#msg_email').val(),
            'idPais': $('#msg_pais').val(),
        },
        debug: true,errorElement: "label",
        submitHandler: function(form){

            /*
            if (grecaptcha === undefined) {
                alert('Recaptcha not defined'); 
                return; 
            }

            var response = grecaptcha.getResponse();

            if (!response) {

                    grecaptcha.reset();
                    grecaptcha.execute();

                //alert('Coud not get recaptcha response'); 
                return; 
            } 
            */

            $("#frmEncuesta").hide();
            $("#mensaje").show();
            $("#mensaje").html("<div class='row animate__animated animate__flipInY'><div style='padding-bottom:70px'><i class='fas fa-spinner fa-spin'></i></div></div>");
            
            $.ajax({
                type: "POST",
                url:$('#URLRAIZ').val()+"/site/enviarEncuesta",
                contentType: "application/x-www-form-urlencoded",
                processData: true,
                data: $('#frmEncuesta').serialize(),
                success: function(msg){
                    $("#mensaje").html("<div class='row animate__animated animate__flipInY'><div class='col-md-12' style='text-align:center;'><h4 style='line-height: 40px;'>"+$('#msg_thank').val()+"</h4></div></div>");
                    setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000000);
                }
            });
        }
    }); 


/* FORM CONTACTO */

 $("#mensaje").hide();

            $("#frmContacto").validate({
                event: "blur",
                rules: {'nombre': "required",'email': "required email",'comentario': "required"},
                messages: {
                    'nombre': $('#msg_nombre').val(),
                    'email': $('#msg_email').val(),
                    'comentario': $('#msg_comentario').val()
                },
                debug: true,errorElement: "label",
                submitHandler: function(form){

                    if (grecaptcha === undefined) {
                        alert('Recaptcha not defined'); 
                        return; 
                    }

                    var response = grecaptcha.getResponse();

                    if (!response) {

                            grecaptcha.reset();
                            grecaptcha.execute();

                        //alert('Coud not get recaptcha response'); 
                        return; 
                    } 

                    $("#frmContacto").hide();
                    $("#mensaje").show();
                    $("#mensaje").html("<span class='col-md-12' style='text-align:center; top:30px'><div style='padding-bottom:70px'><div class='loader-contact fa fa-spin'></div></div><h4>"+$('#msg_enviando').val()+"</h4></span>");
                    $.ajax({
                        type: "POST",
                        url:$('#URLRAIZ').val()+"/enviarcontacto",
                        contentType: "application/x-www-form-urlencoded",
                        processData: true,
                        data: "nombre="+escape($('#nombre').val())
                        +"&apellido="+escape($('#apellido').val())
                        +"&telefono="+escape($('#telefono').val())
                        +"&email="+escape($('#email').val())
                        +"&pais="+escape($('#pais').val())
                        +"&ciudad="+escape($('#ciudad').val())
                        +"&comentario="+escape($('#comentario').val())
                        +"&suscribir="+escape($("#suscribir").attr('checked')),
                        success: function(msg){
                            $("#mensaje").html("<div class='row'><span class='col-md-12' style='text-align:center; top:80px'><h4 style='line-height: 40px;'>"+$('#msg_enviandoOK').val()+"</h4></span></div>");
                            setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000000);
                        }
                    });
                }
            });  

    /* FORM SUSCRIBIR */

    $("#mensajeSus").hide();

    $("#frmSuscribir").validate({
        event: "blur",rules: {'susemail': "required email"},
        messages: {
            'susemail': $('#msg_email').val(),
        },
        debug: true,errorElement: "label",
        submitHandler: function(form){
            $("#boton_enviar_sus").addClass("displayNone"),
            $("#boton_cerrar_sus").addClass("displayNone"),
            $("#frmSuscribir").hide();
            $("#mensajeSus").show();
            $("#mensajeSus").html("<span class='col-md-12' style='text-align:center; color:#B2B2B2'><div class='loader-suscripcion fa fa-spin'></div><br><br><p>"+$('#msg_enviando_sus').val()+"</p></span>");
            $.ajax({
                type: "POST",
                url:$('#URLRAIZ').val()+"/enviarsuscripcion",
                contentType: "application/x-www-form-urlencoded",
                processData: true,
                data: "email="+escape($('#SusEmail').val()),
                success: function(msg){
                    $("#boton_cerrar_sus").removeClass("displayNone"),
                    $("#mensajeSus").html("<div class='row'><span class='col-md-12' style='text-align:center;top:30px; color:#B2B2B2'><p>"+$('#msg_enviando_sus_OK').val()+"</p></span></div>");
                    setTimeout(function() {$('#mensajeSus').fadeOut('fast');}, 3000000);
                }
            });
        }
    });


    /* FORM RESERVAR */

    $("#mensajeComprar").hide();

    $("#frmComprar").validate({
        event: "blur",
        rules: {

            'nombre': "required",
            'telefono': "required",
            'email': "required email"

        },
        messages: {
            'nombre': $('#msg_nombre').val(),
            'telefono': $('#msg_telefono').val(),
            'email': $('#msg_email').val(),
        },
        debug: true,errorElement: "label",

        submitHandler: function(form) {

            $('#conte-paso3').fadeOut(); 
            $('#conte-paso4').fadeIn();  

        }
    });

    /* FORM LINK */

    $("#mensajeLink").hide();

});

$("#mensaje").hide();

/* FORM AGENCIAS */

$("#frmAgencias").validate({

    event: "blur",rules: {'nombre': "required",'email': "required email"},
    messages: {'nombre': "Por favor ingrese su nombre",'email': "Ingrese un e-mail v&aacute;lido"},
    debug: true,errorElement: "label",
    submitHandler: function(form){
        $("#frmAgencias").hide();
        $("#est").hide();
        $("#mensaje").show();
        $("#mensaje").html("<span style='text-align:center; color:#000; font-size:18px '><div class='loader-suscripcion fa fa-spin'></div><br><br><p> Enviando formulario...</span>");
        $.ajax({
            type: "POST",
            url:$('#URLRAIZ').val()+"/enviarAgencias",
            contentType: "application/x-www-form-urlencoded",
            processData: true,
            data: "email="+escape($('#ContactEmail').val())
            +"&nombre="+escape($('#ContactNombre').val())
            +"&opcion1="+escape($('input:radio[name=opcion1]:checked').val())
            +"&opcion2="+escape($('input:radio[name=opcion2]:checked').val())
            +"&opcion3="+escape($('input:radio[name=opcion3]:checked').val())
            +"&opcion4="+escape($('input:radio[name=opcion4]:checked').val())
            +"&opcion5="+escape($('input:radio[name=opcion5]:checked').val())
            +"&opcion6="+escape($('input:radio[name=opcion6]:checked').val())
            +"&novedades="+escape($('input:radio[name=novedades]:checked').val())
            +"&sugerencias="+escape($('#ContactSugerencias').val())
            +"&idcli="+escape($('#idcli').val())
            +"&cli="+escape($('#cli').val()),
            success: function(msg){
                $("#mensaje").html("<div class='row'><span style='text-align:center; color:#000; font-size:18px; padding-left: 0px; '>Gracias por completar la encuesta.</span></div>");
                setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000000);

            }
        });
    }
});  

/* FORM CORPORATIVOS */

$("#frmCorporativos").validate({

    event: "blur",rules: {'nombre': "required",'email': "required email"},
    messages: {'nombre': "Por favor ingrese su nombre",'email': "Ingrese un e-mail v&aacute;lido"},
    debug: true,errorElement: "label",
    submitHandler: function(form){
        $("#frmCorporativos").hide();
        $("#est").hide();
        $("#mensaje").show();
        $("#mensaje").html("<span style='text-align:center; color:#000; font-size:18px '><div class='loader-suscripcion fa fa-spin'></div><br><br> Enviando formulario...</span>");
        $.ajax({
            type: "POST",
            url:$('#URLRAIZ').val()+"/enviarCorporativos",
            contentType: "application/x-www-form-urlencoded",
            processData: true,
            data: "email="+escape($('#ContactEmail').val())
            +"&nombre="+escape($('#ContactNombre').val())
            +"&opcion1="+escape($('input:radio[name=opcion1]:checked').val())
            +"&opcion2="+escape($('input:radio[name=opcion2]:checked').val())
            +"&opcion3="+escape($('input:radio[name=opcion3]:checked').val())
            +"&opcion4="+escape($('input:radio[name=opcion4]:checked').val())
            +"&opcion5="+escape($('input:radio[name=opcion5]:checked').val())
            +"&opcion6="+escape($('input:radio[name=opcion6]:checked').val())
            +"&opcion7="+escape($('input:radio[name=opcion7]:checked').val())
            +"&novedades="+escape($('input:radio[name=novedades]:checked').val())
            +"&sugerencias="+escape($('#ContactSugerencias').val())
            +"&idcli="+escape($('#idcli').val())
            +"&cli="+escape($('#cli').val()),
            success: function(msg){
                $("#mensaje").html("<div class='row'><span style='text-align:center; color:#000; font-size:18px; padding-left: 0px; '>Gracias por completar la encuesta.</span></div>");
                setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000000);

            }
        });
    }
}); 


function linkPago() {
    $(".boton-comprar").hide();
    $("#mensajeLink").show();
    $("#mensajeLink").html("<span class='col-md-12' style='text-align:center; top:1px'><div style='color:#FFF'><div class='loader-item fa fa-spin'></div></div><h4 style='margin-top: 50px'></h4></span>");
    document.getElementById('frmLink').submit();
}
