  <!-- Page Loader -->
  <section id="pageloader">
    <div class="logo-loading">
      <img src="<?php echo URLRAIZ ?>/images/logo-aljibe-02.png" class="" width="" alt="" >
    </div>  
    <div class="loader"></div>
  </section>

<?php require 'menu_.php'; ?>

<div class="waypoint"></div>

  <!-- shop -->
  <section id="reservas-int" class="container shop-int"><br>
   <div class="inner" >
	<div class="col-md-12 fondo-shop">

        <?php

	        switch (Yii::app()->getLanguage()) {
	            case "es": $titulo = $show->titulo_es;$descripcion = $show->des_es;
	                break;
	            case "en":
	                $titulo = $show->titulo_en;
	                $descripcion = $show->des_en;
	                if ($titulo=='') {$titulo = $show->titulo_es;}
	                if ($descripcion=='') {$descripcion = $show->des_es;}
	                break;
	            case "pt":
	                $titulo = $show->titulo_pr;
	                $descripcion = $show->des_pr;
	                if ($titulo=='') {$titulo = $show->titulo_es;}
	                if ($descripcion=='') {$descripcion = $show->des_es;}
	                break;
	            case "zh":
	                $titulo = $show->titulo_zh;
	                $descripcion = $show->des_zh;
	                if ($titulo=='') {$titulo = $show->titulo_es;}
	                if ($descripcion=='') {$descripcion = $show->des_es;}
	                break;
	        }
               
        ?>

       	<h3 class="titulo-show-nuevo fondo-titulo-show"><?php echo $titulo ?></h3>
	
		<div class="col-xs-12 col-md-6 left">

			<h4 class="titulo-shop">
				<?php echo Yii::t('strings','COMPLETE LOS SIGUIENTES PASOS PARA CONFIRMAR SU RESERVA!') ?>
			</h4>	
			
			<div id="mensajeComprar"></div>

				<!-- FORM -->
		<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" class="form-inline" id="frmComprar">-->
		<form action="https://www.paypal.com/cgi-bin/webscr" class="form-inline" id="frmComprar">
	<!-- ################################################################################################################ paso 1 -->	

			<input type="hidden" name="todoslosdias" id="todoslosdias" value="<?php echo $show->todoslosdias; ?>" />
			<input type="hidden" name="fecha_h" id="fecha_h" value="<?php echo $show->fecha; ?>" />
			<input type="hidden" name="hasta" id="hasta" value="<?php echo $show->hasta; ?>" />
		
			<div class="tituloSeccion" id="tituloPaso1">
				<div class="col-md-8">	
					<h4><span class="dorada"><?php echo Yii::t('strings','Paso') ?> 1: </span><?php echo Yii::t('strings','Fecha de su visita')  ?>
						<val>
					<?php if ($show->todoslosdias=='on') {}  

					  // una sola fecha	
					  if ($show->fecha!='' AND $show->hasta=='') {echo Yii::app()->dateFormatter->format("dd/MM/yyyy",$show->fecha);}
					
					 ?>
						</val>
					</h4>
				</div>
				
				<div class="col-md-4 right">
					<div class="cambiar" id="botonCambiarPaso1">
						<h5><a href="javascript:paso(1,fecha)" class="dorada"><?php echo Yii::t('strings','CAMBIAR') ?></a></h5>
		        	</div>
	        	</div>
			</div>

			<div id="conte-paso1">
				<div class="col-xs-5 col-md-7">
				<div class="form-group">
				
				<label for="asd" class="no-mov"><?php echo Yii::t('strings','Fecha') ?> : </label>

 					<?php 

 					if ($show->todoslosdias=='on') {$minDate = 1; $maxDate = '';}

 					if ($show->fecha) {$minDate = 1; $maxDate = '';}   

 					if ($show->fecha > 0 AND $show->hasta > 0) {

						$minDate = Yii::app()->dateFormatter->format("dd/MM/yyyy", $show->fecha);
 						$maxDate = Yii::app()->dateFormatter->format("dd/MM/yyyy", $show->hasta);;
 					}

							  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
							       'language'=>Yii::app()->getLanguage(),
							       'name'=>'fecha',
							       'attribute'=>'dateString',
							       'flat'=>false,
							       'options'=>array(
								        'firstDay'=>1,
								        'constrainInput'=>true,
								        'currentText'=>'Now',
								        'dateFormat'=>'dd/mm/yy',
								        'buttonImageOnly'=> true,
								        'minDate'=>$minDate,
								        'maxDate'=>$maxDate,
	    						      	'beforeShowDay'=> 'js:checkAvailability',
						                'onSelect' => 'js:function() {paso(2)}',
						                'value' => '01-01-1978'
							       ),
							       'htmlOptions'=>array(
							        'class'=>'form-control'
							       ),
							      ));

							$myBadDates = Showsprivados::getDiasnd();
							$momo=array();

							foreach ($myBadDates as $dia) {
								$diaFormat = Yii::app()->dateFormatter->format("dd-MM-yyyy", $dia->fecha);
								//$diaFormat = '';
								$momo[] = $diaFormat;
							}

							//print_r($momo);

							$arrayPHP = $momo;
							$cs = Yii::app()->getClientScript();
							$cs->registerScript('jquery.script', '

							var $myBadDates = '.json_encode($arrayPHP).';

							function checkAvailability(mydate){
							        var $return=true;
							        var $returnclass ="available";
							        $checkdate = $.datepicker.formatDate("dd-mm-yy", mydate);
							        for(var i = 0; i < $myBadDates.length; i++) { 
							                if($myBadDates[i] == $checkdate) {
							                        $return = false;
							                        $returnclass= "unavailable";
							                }
							        }
							        return [$return,$returnclass];
							}
							');
		
					 ?>
				
				</div>
				</div>

				<div class="col-xs-7 col-md-5 bot-sig-paso1">
					<a href="javascript:paso(2)" class="boton_sig_shop pull-right"><?php echo Yii::t('strings','SIGUIENTE'); ?></a>
				</div>			
			</div> <div class="clearfix"></div>	

	<!-- ################################################################################################################ paso 2 -->			

			<div class="tituloSeccion" id="tituloPaso2">
				<div class="col-md-7">	
					<h4><span class="dorada"><?php echo Yii::t('strings','Paso') ?> 2: </span><?php echo Yii::t('strings','Número de personas') ?> <val></val></h4>
				</div>
				
				<div class="col-md-5 right">
				<div class="cambiar" id="botonCambiarPaso2">
					<h5><a href="javascript:paso(2)" class="dorada"><?php echo Yii::t('strings','CAMBIAR') ?></a></h5>
	        	</div>
	        	</div>
			</div>

				<div class="" id="conte-paso2">
					<div class="col-xs-5 col-md-7">
						<label for="asd" class="no-mov"><?php echo Yii::t('strings','Seleccione cantidad') ?> : </label>
						<select onchange="javascript:paso(3,<?php echo $show->precio ?>,'<?php echo $titulo; ?>','<?php echo Yii::t('strings','Fecha') ?>','<?php echo Yii::t('strings','Personas') ?>')" name="cantidadPasajeros" id="cantidadPasajeros" class="form-control">
				           <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
			            </select>
					</div>
					<div class="col-xs-7 col-md-5 bot-sig-paso2">
						<a href="javascript:paso(3,<?php echo $show->precio ?>,'<?php echo $titulo; ?>','<?php echo Yii::t('strings','Fecha') ?>','<?php echo Yii::t('strings','Personas') ?>')" class="boton_sig_shop pull-right"><?php echo Yii::t('strings','SIGUIENTE'); ?></a>
					</div>
				</div> 

	<!-- ################################################################################################################ paso 3 -->			
			<div class="tituloSeccion" id="tituloPaso3">
				<div class="col-md-8">	
					<h4><span class="dorada"><?php echo Yii::t('strings','Paso') ?> 3: </span><?php echo Yii::t('strings','Datos del titular'); ?></h4>
				</div>
			</div>	

			<div id="conte-paso3">
					
            <div class="col-md-6">
	            <input type="text" name="nombre" id="nombre" class="form light" placeholder="<?php echo Yii::t('strings', 'Nombre'); ?>" />
	            <input type="text" name="telefono" id="telefono" class="form light" placeholder="<?php echo Yii::t('strings', 'Teléfono'); ?>" />
	            <input type="email" name="email" id="email" class="form light" placeholder="<?php echo Yii::t('strings', 'email'); ?>" />
            </div>

			<div class="col-md-6">

	        <?php 
			$hotel='';
			echo CHtml::dropDownList('hotel', $hotel, 
              CHtml::listData(Hoteles::model()->findAll(array('order' => 'nombre')),
              'idHotel', 'nombre'),
              $options = array(
    			   	'class' => 'form-control',
    			   	'style' => 'width:100%;height:42px; margin:10px 0 0;',
    			   	'prompt' => Yii::t('strings','Seleccione un Hotel'),
    			   	'onchange' => 'javascript:hotelPay()',
    			   	));
             
             ?>

            <input type="text" name="hotelOther" id="hotelOther" style="display: none;" class="form light" placeholder="<?php echo Yii::t('strings', 'Hotel'); ?>" />

<script>
		$("#hotel").append("<option value='0'>Otro</option>");

	 	$("#hotel").change(function () {

		 	if ($('#hotel').val()==0) {$('#hotelOther').fadeIn();} else {$('#hotelOther').fadeOut();}
        
    });

</script>		
				<div style="height: 50px; padding: 20px; text-align: center; color: #ccc;">
		            <label><?php echo Yii::t('strings','Deseo recibir información') ?></label>
		            <input name="suscribir" id="suscribir" value="1" checked="" type="checkbox">
		        </div>


<div class="divide20"></div>
<div class="col-xs-7 col-md-9 col-md-offset-3 bot-sig-paso2 no-padding">
	<a id="confirmar_reserva" href="javascript:paso(4,<?php echo $show->precio ?>,'<?php echo $titulo; ?>','<?php echo Yii::t('strings','Fecha') ?>','<?php echo Yii::t('strings','Personas') ?>')" class="boton_sig_shop pull-right"><?php echo Yii::t('strings','SIGUIENTE'); ?>
	</a>
</div>

<div class="clearfix"></div>
<div class="divide20"></div>
            </div>
  	
			</div> 

			<div class="clearfix"></div>
	
	
	<!-- #### PAGO ###################################################################################################### paso 4 -->		
	
			<div class="tituloSeccion" id="tituloPaso4">
				<div class="col-md-8">	
					<h4><span class="dorada"><?php echo Yii::t('strings','Paso') ?> 4: </span><?php echo Yii::t('strings','Pago'); ?></h4>
				</div>
			</div>	

			<div id="conte-paso4">

				<div id="paypal-button-container"></div> 

	            <input type="hidden" class="form-control" name="msg_nombre" id="msg_nombre" value="<?php echo Yii::t('strings', 'Por favor ingrese su nombre'); ?>">
	            <input type="hidden" class="form-control" name="msg_nombre" id="msg_telefono" value="<?php echo Yii::t('strings', 'Por favor ingrese su teléfono'); ?>">
	            <input type="hidden" class="form-control" name="msg_email" id="msg_email" value="<?php echo Yii::t('strings', 'Por favor ingrese su email'); ?>">   

<input type="hidden" class="form-control" name="msg_enviando" id="msg_enviando" value="<?php echo Yii::t('strings', 'AGUARDE POR FAVOR, ESTAMOS PROCESANDO SU PAGO...'); ?>">

<input type="hidden" class="form-control" name="msg_exito" id="msg_exito" value="<?php echo Yii::t('strings', '¡SU PAGO SE COMPLETÓ EXITOSAMENTE!'); ?>"> 

<input type="hidden" class="form-control" name="msg_enviadoOK" id="msg_enviandoOK" value="<?php echo Yii::t('strings', ' respuesta. Gracias!'); ?>">
	            
	            <input type="hidden" class="form-control" name="tipo" id="tipo" value="1"> <!-- 1:show / 2:degustacion 3:clase -->
	            <input type="hidden" class="form-control" name="url" id="URLRAIZ" value="<?php echo URLRAIZ ?>">
	            <input type="hidden" class="form-control" name="idShow" id="idShow" value="<?php echo $_REQUEST['id']; ?>">
	            <input type="hidden" class="form-control" name="fechamax" id="fechamax" value="<?php if ($show->todoslosdias=='on') {} else {
	            	echo Yii::app()->dateFormatter->format("dd/MM/yyyy",$show->fecha);} ?>">
	    	
			</div> 
			</form>

		</div>

		<div class="col-xs-12 col-md-6 no-padding fondo-cava">
			
			<img src="<?php echo URLRAIZ.'/pics/shows/'.$show->imagen ?>" alt="" class='img-responsive no-mov'>

			<div class="conte-resumen">  <!-- contenedor col form + resumen -->
				
				<div class="col-md-12">
					<h4 class="titulo-reserva">
						<?php echo Yii::t('strings','RESUMEN DE SU RESERVA') ?>
					</h4>
				</div>

				<div class="col-md-12" id="shopResumen"> <!-- col de resumen -->
					<div id="resumenFecha"><h4><?php echo Yii::t('strings','Fecha') ?> : <val>
						<?php if ($show->todoslosdias=='on') {} else {
							echo Yii::app()->dateFormatter->format("dd/MM/yyyy",$show->fecha);
							} ?>
					</val></h4></div>
					<div id="resumenPersonas"><h4><?php echo Yii::t('strings','Personas') ?> : <val></val></h4></div>
					<div id="resumenPersonaPrecio"><h4><?php echo Yii::t('strings','Precio por persona') ?> : USD <val><?php echo $show->precio ?></val></h4></div><br>
					<div id="resumenTotal"><h4><?php echo Yii::t('strings','TOTAL A PAGAR') ?> : USD <val></val></h4>
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
    	$.widget.bridge('uibutton', $.ui.button);
		$( "#confirmar_reserva" ).click(function() {
			$( "#frmComprar" ).submit();
		});
    </script>

<script>

function formSubmit(response) {
    
    $('input[type=button]').prop('disabled', true);
    $('#confirmar_reserva').removeClass('boton_contacto');
    $('#confirmar_reserva').addClass('boton_contacto_disable');
    $('#confirmar_reserva').val($('#msg_enviando').val());
    $("#frmComprar").submit();
    return true;
}

 </script>

<div class="g-recaptcha" 
 	data-sitekey="6LevK_sUAAAAAODo57YUXSOV-xyZf6j1oCCbiegT"
    data-size="invisible" 
    data-callback="formSubmit">
</div>

<script src="https://www.google.com/recaptcha/api.js"></script>

<script src="https://www.paypal.com/sdk/js?client-id=<?php echo Yii::app()->params['client-id-paypal']; ?>&currency=USD" data-sdk-integration-source="button-factory"></script>

<script>

  paypal.Buttons({
  	  locale: 'en_US',
      style: {
          shape: 'pill',
          color: 'black',
          layout: 'vertical',
          label: 'pay',
          height: 50,
      },

      createOrder: function(data, actions) {

          return actions.order.create({

          	application_context: {
                brand_name: 'ALJIBE',
                user_action: 'PAY_NOW',
                shipping_preference: 'NO_SHIPPING',
            },

            purchase_units: [{
      				reference_id: item_number,
      				description: titulo,
                  amount: {
                    currency: 'USD',
                    value: total
                  }
              }]

          });
      },

      onApprove: function(data, actions) {
          
        		$("#frmComprar").hide();
            $(".titulo-shop").hide();
            $("#mensajeComprar").show();

						$([document.documentElement, document.body]).animate({
				        scrollTop: $("#reservas-int").offset().top-100
				    }, 2000);
            
            $("#mensajeComprar").html("<span class='col-md-12' style='text-align:center; top:1px'><div style='padding-top:50px'><div class='loader'></div><h4 style='margin-top: 50px'>"+$('#msg_enviando').val()+"</h4></span>");
    
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

            objForm = $('#frmComprar').serializeArray().reduce(function (m, o)
           
            {m[o.name] = o.value;return m;}, {});
           
            var jsonObject = $.extend({}, objResponse, objForm);

            if (details.status == 'COMPLETED') {

                var request = $.ajax({
                    url: $('#URLRAIZ').val()+"/getPagoPayPal",
                    type: "POST",
                    data: $.param(jsonObject),
                });

                request.done(function (data)  {

	                $("#mensajeComprar").html("<span class='col-md-12' style='text-align:center; top:1px'><h4 style='margin-top: 50px'><i class='fa fa-check' aria-hidden='true'></i> "+$('#msg_exito').val()+"</h4><p style='color: white;'>Transaction id: "+details.id+"</p></span>");
    
    	            //console.log(data.message);
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


<style>
	.grecaptcha-badge {visibility: inherit;}
</style>	