  <!-- Page Loader -->
  <section id="pageloader">
    <div class="loader-item fa fa-spin colored-border"></div>
  </section>

<?php require 'menu.php'; ?>

  <!-- reservas -->
  <section id="reservas-int" class="container">
   <div class="inner" style="padding: 100px 0 80px 0;">

   	<?php //_REQUEST['txn_id']=123456 ?>

	<?php if (isset($_REQUEST['txn_id'])) : ?>

		<?php
		 	 $venta = Ventas::actualizarVenta($_REQUEST['txn_id']);
			 Yii::app()->getSession()->regenerateID();
		 	 //echo Yii::app()->session->sessionID;
		?>
    
        <h2 class="titulo"><?php echo Yii::t('strings', 'SU RESERVA SE REALIZO CON EXITO.'); ?></h2>
        <br>

		<h3 class="titulo">
		<?php echo Yii::t('strings', 'N° DE TRANSACCION : ').$_REQUEST['txn_id']; ?>	
		</h3>
		<br><br>

	<?php else : ?>

	<h2>ACCESO DENEGADO</h2>
	<br><br><br><br><br><br><br><br><br>

	<?php endif ?>

    </div>
  </section>