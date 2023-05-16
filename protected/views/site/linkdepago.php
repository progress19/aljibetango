  <!-- Page Loader -->
  <section id="pageloader">
    <div class="logo-loading">
      <img src="<?php echo URLRAIZ ?>/images/logo-gala-tango-3.png" class="" width="" alt="" >
    </div>  
    <div class="loader"></div>
  </section>

<?php require 'menu.php'; ?>

  <!-- reservas -->
  <section id="reservas-int" class="container">
   <div class="inner" style="padding: 10px 0 80px 0;">

   	<?php //$_REQUEST['id']=32 ?>

	<?php if (isset($_REQUEST['id'])) : ?>

		<?php
		 	 $pago = Pagos::getPago($_REQUEST['id']);
		 	 Pagos::sesionPago($_REQUEST['id']);
		?>
    
        <h2 class="titulo"><?php echo Yii::t('strings', 'RESUMEN DE PAGO'); ?></h2>
        <br><br>

		<div class="col-md-6 tituloSeccion" id="shopResumen">
			<h4><?php echo Yii::t('strings','Evento') ?> : <?php echo $pago->titulo ?></h4>
			<div id="resumenFecha"><h4><?php echo Yii::t('strings','Fecha') ?> : <val>
				<?php echo Yii::app()->dateFormatter->format("dd/MM/yyyy",$pago->fecha); ?>
			</val></h4></div>
			<div id="resumenPersonaPrecio"><h4><?php echo Yii::t('strings','Total a Pagar') ?> : USD <val><?php echo $pago->precio ?></val></h4></div>
			<h4><?php echo Yii::t('strings','Email') ?> : <?php echo $pago->email ?></h4>			
			<h4><?php echo Yii::t('strings','Nombre') ?> : <?php echo $pago->nombre ?></h4>
			<h4><?php echo Yii::t('strings','Comentarios') ?> : <?php echo $pago->comentarios ?></h4>

		</div>

		<div id="mensajeComprar"></div>
		<!-- FORM -->
		<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" class="form-inline" id="frmLink">-->
		<form action="https://www.paypal.com/cgi-bin/webscr" class="form-inline" id="frmLink">
		<!-- PAYPAL !-->
			<input type="hidden" name="cmd" value="_xclick">
		    <input type="hidden" name="business" value="info@laventanaweb.com">
		    <input type="hidden" name="item_name" id="item_name" value="<?php echo $pago->titulo.' - Fecha : '.Yii::app()->dateFormatter->format("dd/MM/yyyy",$pago->fecha) ?>">
		    <input type="hidden" name="item_number" id="item_number" value="<?php echo $pago->idPago  ?>">
		    <input type="hidden" name="amount" id="paypalTotal" value="<?php echo $pago->precio ?>">
		    <input type="hidden" name="no_shipping" value="0">
		    <input type="hidden" name="no_note" value="1">
		    <input type="hidden" name="currency_code" value="USD">
		    <input type="hidden" name="lc" value="AR">
		    <input type="hidden" name="bn" value="PP-BuyNowBF">
		    <input type="hidden" name="rm" value="2">
		    <input type="hidden" name="return" value="http://www.laventanaweb.com/site/pagosFin">
		<!-- FIN PAYPAL !-->   

		<div class="col-md-6">
			<img src="<?php echo URLRAIZ ?>/images/paypal_logo.png" style="width: 250px; margin: 0px auto; padding: 10px;" class="img-responsive" alt="">
            <br><br><br>
            <div id="mensajeLink"></div>
            <a href="javascript:linkPago()" style="margin:0 auto;" class="boton-comprar"><?php echo Yii::t('strings', 'PAGAR'); ?></a> 
            
		</div> 

		</form>

	<?php else : ?>

	<h2>ACCESO DENEGADO</h2>
	<br><br><br><br><br><br><br><br><br>

	<?php endif ?>

    </div>
  </section>