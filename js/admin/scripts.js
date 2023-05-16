function selectTodosLosDias(){

if($("#Shows_todoslosdias:checked").val() == 'on'){
    $('#divFecha').addClass( 'displayNone' );
    $('#divHasta').addClass( 'displayNone' );
}

else {

    $('#divFecha').removeClass( 'displayNone' );   
    $('#divHasta').removeClass( 'displayNone' );   
}

if($("#Cava_todoslosdias:checked").val() == 'on'){
    $('#divFecha').addClass( 'displayNone' );
    $('#divHasta').addClass( 'displayNone' );
}

else {
    
    $('#divFecha').removeClass( 'displayNone' );   
    $('#divHasta').removeClass( 'displayNone' );   
}

}


function mostrarHotel(idHotel) {
 //	alert(idHotel)
 // $('#divDecksDescripcion').html('<div class="col-md-4 col-md-offset-4"><h5 style="text-align:center">Cargando Cubierta, por favor espere...</h5><div id="w9" class="active progress-striped progress"><div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"><span class="sr-only">100% Complete</span></div></div></div>');
    $('#datosHotel').removeClass( 'displayNone' );   
    $.ajax({   
        url: $('#URLRAIZ').val()+"/buscarHotel",   
        data: "id="+idHotel,   
        success: function(msg){    
	     	$('#divHotel').html(msg);
        } 
    });
}

function filtroEncuesta() {
	  desde = $('#desde').val();
	  hasta = $('#hasta').val();
      $.ajax({   
        //"dataType": "jsonp", 
        url: "filtrarEncuesta",   
        data: "desde="+desde+"&hasta="+hasta,   
        success: function(msg){     
            $('#divResultados').html(msg);
        } 
    });
 }

 function filtroEncuestaCorpo() {
      desde = $('#desde').val();
      hasta = $('#hasta').val();
      $.ajax({   
        //"dataType": "jsonp", 
        url: "filtrarEncuestaCorpo",   
        data: "desde="+desde+"&hasta="+hasta,   
        success: function(msg){     
            $('#divResultados').html(msg);
        } 
    });
 }