 /* ==============================================
Page Loader
=============================================== */

$(window).load(function() {
	'use strict';
	$(".loader-item").delay(700).fadeOut();
	$("#pageloader").delay(1200).fadeOut("slow");
});


    $('#tohash').click(function(){
        $('html, body').animate({
            scrollTop: $("#salones").offset().top -100}, 900);
        return false;
    });

    $('#logo-home').click(function(){
        $('html, body').animate({
            scrollTop: $("#home").offset().top
        }, 900);
        return false;
    });

/* ==============================================
Drop Down Menu Fade Effect
=============================================== */	

$('.nav-toggle').hover(function() {
	'use strict';
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(250);
    }, function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(250)
 });

/*==============================================
Mobile Menu Button
===============================================*/	

$('.mini-nav-button').click(function() {
    $(".nav-menu").slideToggle("9000");
 });

$('.nav a').click(function () {
	if ($(window).width() < 1200) {
    	$(".nav-menu").slideToggle("2000")}
});


 /* ==============================================
Scroll Navigation
=============================================== */	
// Cache selectors

if ($(window).width()>375) {
	var alto = 105;
} else {var alto = 125}

var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+alto,
    // All list items
    menuItems = topMenu.find(".scroll"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

	// Bind click handler to menu items
	// so we can get a fancy scroll animation
	menuItems.click(function(e){
	  var href = $(this).attr("href"),
	      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+110;
	  $('html, body').stop().animate({ 
	      scrollTop: offsetTop
	  }, 900);
	  e.preventDefault();
	});

	// Bind to scroll
	$(window).scroll(function(){
	   // Get container scroll position
	   var fromTop = $(this).scrollTop()+topMenuHeight;
	   
	   // Get id of current scroll item
	   var cur = scrollItems.map(function(){
	     if ($(this).offset().top < fromTop)
	       return this;
	   });
	   // Get the id of the current element
	   cur = cur[cur.length-1];
	   var id = cur && cur.length ? cur[0].id : "";
	   
	   if (lastId !== id) {
	       lastId = id;
	       // Set/remove active class
	       menuItems
	         .parent().removeClass("active")
	         .end().filter("[href='#"+id+"']").parent().addClass("active");
	   }                   
	});

 /* ==============================================
Tooltips Calling
=============================================== */	

$('[data-toggle="tooltip"]').tooltip();

/* ==============================================
Navigation Scroll Effect
=============================================== */


$(document).ready(function () {
	'use strict';

    var menu = $('#navigation');

    $(window).scroll(function () {
        var y = $(this).scrollTop();
        var z = $('.waypoint').offset().top - 200;

        if (y >= z) {
            menu.removeClass('not-visible-nav').addClass('visible-nav');
        }
        else{
            menu.removeClass('visible-nav').addClass('not-visible-nav');
        }
    });

});

$('#conte-paso2').fadeOut();
$('#conte-paso3').fadeOut();
$('#conte-paso4').fadeOut();

$('#botonCambiarPaso1').fadeOut();
$('#botonCambiarPaso2').fadeOut();

$('.bot-sig-paso1').fadeOut();
$('#resumenTotal').fadeOut();

if ($('#todoslosdias').val()!='on') {

if ($('#fecha_h').val()!=='' && $('#hasta').val()!=='') {
	$('#conte-paso1').fadeIn();
} else {
	$('#conte-paso1').fadeOut();
	$('#conte-paso2').fadeIn();
	$('#resumenFecha').fadeIn();
}

} else {

};

var p;
var fecha;
var total;
var precio;
var titulo;
var pasajeros_tra;
var fecha_tra;
var show_tra;
var item_number = $('#idShow').val();

function paso(p,precio,show_tra,fecha_tra,pasajeros_tra) {
	
	switch (p) {
		case 1:
			$('#conte-paso2').fadeOut();
			$('#conte-paso3').fadeOut();
			$('#conte-paso4').fadeOut();
			$('#conte-paso1').fadeIn();
			$('#botonCambiarPaso1').fadeOut();
			$('#botonCambiarPaso2').fadeOut();
			$('.bot-sig-paso1').fadeIn();
		break;

		case 2:
			$('#conte-paso1').fadeOut();
			$('#conte-paso2').fadeIn();
			$('#conte-paso3').fadeOut();
			$('#conte-paso4').fadeOut();
			
				if ($('#todoslosdias').val()!='on') {
					$('#botonCambiarPaso1').fadeOut();

				if ($('#fecha_h').val()!=='' && $('#hasta').val()!=='') {
					$('#botonCambiarPaso1').fadeIn();
					$('#tituloPaso1 .col-md-8 > h4 > val').html($('#fecha').val());		
					$('#shopResumen #resumenFecha > h4 > val').html($('#fecha').val());
				}

				} else {
					//alert('todos');
					/* todos los dias */
					$('#botonCambiarPaso1').fadeIn();
					$('#tituloPaso1 .col-md-8 > h4 > val').html($('#fecha').val());	
					$('#shopResumen #resumenFecha > h4 > val').html($('#fecha').val());
					$('#fechamax').val($('#fecha').val());	

				};
			
			$('#botonCambiarPaso2').fadeOut();		
			$('#resumenFecha').fadeIn();
			
		break;

		case 3:
			if ($('#todoslosdias').val()!='on') {$('#botonCambiarPaso1').fadeOut();};
			total = parseInt(precio * $('#cantidadPasajeros').val()).toFixed(2);
			$('#conte-paso2').fadeOut();
			$('#conte-paso3').fadeIn();
			$('#botonCambiarPaso2').fadeIn();
			$('#resumenPersonas').fadeIn();	
			$('#resumenTotal').fadeIn();
			$('#tituloPaso2 .col-md-7 > h4 > val').html($('#cantidadPasajeros').val());	
			$('#shopResumen #resumenPersonas > h4 > val').html($('#cantidadPasajeros').val());
			$('#shopResumen #resumenTotal > h4 > val').html(total);
			$('#paypalTotal').val(total);
			titulo = 'Aljibe-' +show_tra + ' - ' +fecha_tra + ' : ' + $('#fecha').val() + ' - ' + pasajeros_tra + ' : ' + $('#cantidadPasajeros').val();
			$('#item_name').val(titulo);
			//$.scrollTo('#tituloPaso1', 1000);

		break;
	}

}

/* FUNCION PARA DEGUSTACIONES */

function paso_deg(p,show_tra,fecha_tra,pasajeros_tra) {
	
	switch (p) {
		case 1:
			$('#conte-paso2').fadeOut();
			$('#conte-paso3').fadeOut();
			$('#conte-paso1').fadeIn();
			$('#botonCambiarPaso1').fadeOut();
			$('#botonCambiarPaso2').fadeOut();
			$('.bot-sig-paso1').fadeIn();
		break;

		case 2:
			$('#conte-paso1').fadeOut();
			$('#conte-paso2').fadeIn();
			$('#conte-paso3').fadeOut();
			
				if ($('#todoslosdias').val()!='on') {
					$('#botonCambiarPaso1').fadeOut();

				if ($('#fecha_h').val()!=='' && $('#hasta').val()!=='') {
					$('#botonCambiarPaso1').fadeIn();
					$('#tituloPaso1 .col-md-8 > h4 > val').html($('#fecha').val());		
					$('#shopResumen #resumenFecha > h4 > val').html($('#fecha').val());
				}

				} else {
					//alert('todos');
					/* todos los dias */
					$('#botonCambiarPaso1').fadeIn();
					$('#tituloPaso1 .col-md-8 > h4 > val').html($('#fecha').val());	
					$('#shopResumen #resumenFecha > h4 > val').html($('#fecha').val());
					$('#fechamax').val($('#fecha').val());	

				};
			
			$('#botonCambiarPaso2').fadeOut();		
			$('#resumenFecha').fadeIn();
			
		break;

		case 3:
			if ($('#todoslosdias').val()!='on') {$('#botonCambiarPaso1').fadeOut();};
			
			var pasajeros = $('#cantidadPasajeros').val();
		    $.ajax({
		       url: "../../site/calculodegustacion",
		       type: "post",
		       data: "valor="+pasajeros,
		       success: function(data){
		           var precio_a = data;

			total = parseInt(precio_a * $('#cantidadPasajeros').val()).toFixed(2);
			$('#conte-paso2').fadeOut();
			$('#conte-paso3').fadeIn();
			$('#botonCambiarPaso2').fadeIn();
			$('#resumenPersonas').fadeIn();	
			$('#resumenTotal').fadeIn();
			$('#tituloPaso2 .col-md-8 > h4 > val').html($('#cantidadPasajeros').val());	
			$('#shopResumen #resumenPersonas > h4 > val').html($('#cantidadPasajeros').val());
			$('#shopResumen #resumenPersonaPrecio > h4 > val').html(precio_a);
			$('#shopResumen #resumenTotal > h4 > val').html(total);
			$('#paypalTotal').val(total);
			titulo = show_tra + ' - ' +fecha_tra + ' : ' + $('#fecha').val() + ' - ' + pasajeros_tra + ' : ' + $('#cantidadPasajeros').val();
			$('#item_name').val(titulo);
			$.scrollTo('#tituloPaso1', 1000);


		       }
		    });


		break;
	}

}

/* FUNCION PARA CLASES */

function paso_clases(p,show_tra,fecha_tra,pasajeros_tra) {
	
	switch (p) {
		case 1:
			$('#conte-paso2').fadeOut();
			$('#conte-paso3').fadeOut();
			$('#conte-paso1').fadeIn();
			$('#botonCambiarPaso1').fadeOut();
			$('#botonCambiarPaso2').fadeOut();
			$('.bot-sig-paso1').fadeIn();
		break;

		case 2:
			$('#conte-paso1').fadeOut();
			$('#conte-paso2').fadeIn();
			$('#conte-paso3').fadeOut();
			
				if ($('#todoslosdias').val()!='on') {
					$('#botonCambiarPaso1').fadeOut();

				if ($('#fecha_h').val()!=='' && $('#hasta').val()!=='') {
					$('#botonCambiarPaso1').fadeIn();
					$('#tituloPaso1 .col-md-8 > h4 > val').html($('#fecha').val());		
					$('#shopResumen #resumenFecha > h4 > val').html($('#fecha').val());
				}

				} else {
					//alert('todos');
					/* todos los dias */
					$('#botonCambiarPaso1').fadeIn();
					$('#tituloPaso1 .col-md-8 > h4 > val').html($('#fecha').val());	
					$('#shopResumen #resumenFecha > h4 > val').html($('#fecha').val());
					$('#fechamax').val($('#fecha').val());	

				};
			
			$('#botonCambiarPaso2').fadeOut();		
			$('#resumenFecha').fadeIn();
			
		break;

		case 3:
			if ($('#todoslosdias').val()!='on') {$('#botonCambiarPaso1').fadeOut();};
			
			var pasajeros = $('#cantidadPasajeros').val();
		    $.ajax({
		       url: "../../site/calculoclases",
		       type: "post",
		       data: "valor="+pasajeros,
		       success: function(data){
		           var precio_a = data;

			total = parseInt(precio_a * $('#cantidadPasajeros').val()).toFixed(2);
			$('#conte-paso2').fadeOut();
			$('#conte-paso3').fadeIn();
			$('#botonCambiarPaso2').fadeIn();
			$('#resumenPersonas').fadeIn();	
			$('#resumenTotal').fadeIn();
			$('#tituloPaso2 .col-md-8 > h4 > val').html($('#cantidadPasajeros').val());	
			$('#shopResumen #resumenPersonas > h4 > val').html($('#cantidadPasajeros').val());
			$('#shopResumen #resumenPersonaPrecio > h4 > val').html(precio_a);
			$('#shopResumen #resumenTotal > h4 > val').html(total);
			$('#paypalTotal').val(total);
			titulo = show_tra + ' - ' +fecha_tra + ' : ' + $('#fecha').val() + ' - ' + pasajeros_tra + ' : ' + $('#cantidadPasajeros').val();
			$('#item_name').val(titulo);
			$.scrollTo('#tituloPaso1', 1000);

		    }
		    });


		break;
	}

}



function calcularPrecio() {
	if (document.getElementById('comprar_transfer').checked) {
		var showPrecioTransferTotal = showPrecioTransfer * cantPersonas;
		$('#divResumenTraslado').fadeIn();
		$('#item_name').val(showTitulo + " + Traslado privado");
	} else {
		var showPrecioTransferTotal = 0;
		$('#divResumenTraslado').fadeOut();
		$('#item_name').val(showTitulo);
	}
	total = parseInt(showPrecio * cantPersonas + showPrecioTransferTotal)
			.toFixed(2);
	precio = parseInt(showPrecio * cantPersonas).toFixed(2);
	$('#divShowPrecio').html(precio);
	$('#divShowTotalAPagar').html(total);
	$('#paypalTotal').val(total);

}

function seleccionarPersonas(c) {
	cantPersonas = c;
	$('#botonReservasPaso2Continuar').fadeIn();
	abrirPasos(3);
}
			
		//Reservas Open&Close Effect
		$( ".res-button" ).click(function(){
			$( "#res-button" ).toggleClass( "close-res-button", "open-res-button", 1000 );
			$( "#res-button" ).toggleClass( "open-res-button", "close-res-button", 1000 );

			$( "#footer_reservas" ).toggleClass( "close-res", "open-res", 1000 );
			$( "#footer_reservas" ).toggleClass( "open-res", "close-res", 1000 );
			return false;
		});

function hotelPay() {
	var titulo = $('#item_name').val();
	var hotel = $("#hotel option:selected").text();
	$('#item_name').val(titulo+' - Hotel : '+hotel);
}
