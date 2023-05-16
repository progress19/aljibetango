  <!-- Page Loader -->
  <section id="pageloader">
    <div class="logo-loading">
      <img src="<?php echo URLRAIZ ?>/images/logo-aljibe-02.png" class="" width="" alt="" >
    </div>  
    <div class="loader"></div>
  </section>

<?php require 'menu.php'; ?>

  <!-- shop -->
  <section id="reservas-int" class="container shop-int"><br>
   <div class="inner" >
  <div class="col-md-12 fondo-shop">

    <h3 class="titulo-show-nuevo fondo-titulo-show"><?php echo Yii::t('strings','TANGO SHOW - ONDEMAND') ?></h3>
  
    <div class="col-xs-12 col-md-6 left">

      <h4 class="titulo-shop" style="text-align: center;">
        <?php echo Yii::t('strings','Disfrutá del mejor Show de Tango desde tu hogar. Un momento para disfrutar en familia!') ?>
      </h4> 
      
      <div id="mensajeComprar"></div>
      <div id="mensajeRedireccion"></div>

<form action="" class="form-inline" id="frmComprarOndemand">

      <div id="paypal-button-container" class="conte-paypal-ondemand"></div> 

          <input type="hidden" class="form-control" name="url" id="URLRAIZ" value="<?php echo URLRAIZ ?>">
          <input type="hidden" class="form-control" name="msg_enviando" id="msg_enviando" value="<?php echo Yii::t('strings', 'AGUARDE POR FAVOR, ESTAMOS PROCESANDO SU PAGO...'); ?>">
          <input type="hidden" class="form-control" name="msg_exito" id="msg_exito" value="<?php echo Yii::t('strings', '¡SU PAGO SE COMPLETÓ EXITOSAMENTE!'); ?>">
          <input type="hidden" class="form-control" name="msg_redireccion" id="msg_redireccion" value="<?php echo Yii::t('strings', 'AGUARDE POR FAVOR...'); ?>">
     
  <p style="color: #fff;"><?php echo Yii::t('strings','Términos y Condiciones') ?>:</p>

  <p style="color: #fff;">
    <?php echo Yii::t('strings','Una vez procesado el pago se le enviará a su email un link para disfrutar del Show de Tango de La Ventana desde su hogar. El video estará disponible por 30 minutos una vez que haga clic en el mismo. Recuerde que si comparte el link o el correo electrónico, automáticamente se anulará el mismo por seguridad y deberá volver a generarlo. Esta prohibida la copia, venta y reproducción en otros medios que no sea laventanaweb.com bajo los derechos de autor y propiedad de La Ventana SRL.') ?>
  </p>

</form>    

    </div>

    <div class="col-xs-12 col-md-6 no-padding fondo-cava">
      
      <img src="<?php echo URLRAIZ ?>/images/imagen_ondemand.jpg" alt="" class='img-responsive no-mov'>

      <div class="conte-resumen">  <!-- contenedor col form + resumen -->
        
          <div class="resumenOndemand"><h4><?php echo Yii::t('strings','TOTAL A PAGAR') ?> : USD <val>5.-</val></h4>

        </div>

      </div>  <!-- fin div conte form + resumen --> 

    </div>

    <div class="clearfix"></div>

    </div>
    </div>
  <div class="clearfix"></div>
    <br>
  </section>

  <!--<div class="spa" style="height:50px"></div>-->

  <!-- JS Files -->

      <!-- jQuery UI 1.11.2 -->
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.scrollTo.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    
<script>

function formSubmit(response) {
    
    $('input[type=button]').prop('disabled', true);
    $('#confirmar_reserva').removeClass('boton_contacto');
    $('#confirmar_reserva').addClass('boton_contacto_disable');
    $('#confirmar_reserva').val($('#msg_enviando').val());
    $("#frmComprarOndemand").submit();
    return true;
}

</script>

<script src="https://www.paypal.com/sdk/js?client-id=AY7o8hxrqRiq3mL7v0E1V_3P0sWGlmliYlsgrNY2l1VUXXKe9tcCBAIo5PM4L3n0dU96uUH0dkNNIPva&currency=USD" data-sdk-integration-source="button-factory">
</script>

<script>

  paypal.Buttons({
      locale: 'en_US',
      style: {
          shape: 'pill',
          color: 'black',
          layout: 'horizontal',
          label: 'pay',
          height: 50,
      },

      createOrder: function(data, actions) {

          return actions.order.create({

            application_context: {
                brand_name: 'ALJIBE TANGO',
                user_action: 'PAY_NOW',
                shipping_preference: 'NO_SHIPPING',
            },

            purchase_units: [{
              reference_id: '0',
              description: 'TANGO SHOW - ONDEMAND',
                  amount: {
                    currency: 'USD',
                    value: 5
                  }
              }]

          });
      },

      onApprove: function(data, actions) {
          
            $("#frmComprarOndemand").hide();
            $(".titulo-shop").hide();
            $("#mensajeComprar").show();

      $.scrollTo('#reservas-int', 1000, {offset:-300});

            $("#mensajeComprar").html("<span class='col-md-12' style='text-align:center; top:1px'><div style='padding-bottom:60px'><div class='loader-item fa fa-spin'></div></div><h4 style='margin-top: 50px'>"+$('#msg_enviando').val()+"</h4></span>");
    
          return actions.order.capture().then(function(details) {
                      
      objResponse = {
          orderId: data.orderID,
          id: details.id,
          orderStatus: details.status,
          payerId: details.payer.payer_id,
          payerEmail: details.payer.email_address,
          payerCountry: details.payer.address.country_code,
          payerName: details.payer.name.given_name + ' ' + details.payer.name.surname,
          paymentAmount: details.purchase_units[0].payments.captures[0].amount.currency_code + ' ' + details.purchase_units[0].payments.captures[0].amount.value,
          paymentReference: details.purchase_units[0].reference_id,
      };

            objForm = $('#frmComprarOndemand').serializeArray().reduce(function (m, o)
           
            {m[o.name] = o.value;return m;}, {});
           
            var jsonObject = $.extend({}, objResponse, objForm);

            if (details.status == 'COMPLETED') {

                var request = $.ajax({
                    url: $('#URLRAIZ').val()+"/getPagoPayPalOndemand",
                    type: "POST",
                    data: $.param(jsonObject),
                });

                request.done(function (data)  {

                  $("#mensajeComprar").html("<span class='col-md-12' style='text-align:center; top:1px'><h4 style='margin-top: 50px'><i class='fa fa-check' aria-hidden='true'></i> "+$('#msg_exito').val()+"</h4><p>Transaction id: "+details.id+"</p></span>");

                  $("#mensajeRedireccion").html("<span class='col-md-12' style='text-align:center; top:1px'><div style='padding-bottom:60px'><div class='loader-item fa fa-spin'></div></div><h4 style='margin-top: 50px'>"+$('#msg_redireccion').val()+"</h4></span>");
    
                   var id = details.id;

                   sleep(5000).then(() => {
                        document.location.href = $('#URLRAIZ').val()+"/ondemandPlay/"+id;
                    });
  
                 
                });
           
                request.fail(function (jqXHR)  {});

            } else {
/*
              $("#mensajeComprar").html("<span class='col-md-12' style='text-align:center; top:1px'><h4 style='margin-top: 50px'>"ERROR"</h4></span>");
  */         
            }

              //alert('Transaction completed by ' + details.payer.name.given_name + '!');
          
          });
      }

  }).render('#paypal-button-container');


</script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ondemand.js"></script>

