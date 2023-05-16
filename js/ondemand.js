// sleep time expects milliseconds
function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}


function formSubmit(response) {
    
    $('input[type=button]').prop('disabled', true);
    $('#confirmar_reserva').removeClass('boton_contacto');
    $('#confirmar_reserva').addClass('boton_contacto_disable');
    $('#confirmar_reserva').val($('#msg_enviando').val());
    $("#frmComprarOndemand").submit();
    return true;
}



