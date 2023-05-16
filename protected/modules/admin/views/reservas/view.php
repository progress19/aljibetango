<?php
/* @var $this VentasController */
/* @var $model Ventas */

$this->menu_ventas = 'active';

$this->breadcrumbs=array(
	'Reservas'=>array('admin'), 'Ver Reserva',
	);

$this->titulo='<i class="fa fa-fw fa-shopping-cart"></i> Reservas';

?>

<div class="col-md-8">

<div class="box box-success" style="font-size: 15px;">
    <div class="box-header">

    <div class="col-md-6">

	    <div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'id' ?></label> : 
				<?php echo $model->id?>
			</div>
		</div> 

		<div class="clearfix"></div>
	    
	 	<div class="col-md-12">
		    <div class="form-group">
		      	<label for="">Fecha: </label>
				<?php echo date("d-m-Y H:i",strtotime($model->fechaReg)); ?>
			</div>
		 </div>

		<div class="col-md-12">
		    <div class="form-group">
		      	<label for="">Fecha de reserva: </label>
				<?php echo date("d-m-Y",$model->fechaReserva); ?>
			</div>
		 </div>

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'Show' ?></label> 
			
					<a href="<?php echo URLRAIZ.'/admin/shows/update/'.$model->paymentReference ?>" target="blank" >
						<?php echo Reservas::getNombreShow($model->tipo, $model->paymentReference); ?> 

					</a>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'Pasajeros' ?></label> : 
				<?php echo $model->cantidadPasajeros?>
			</div>
		</div> 

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'nombre' ?></label> : 
				<?php echo $model->nombre?>
			</div>
		</div> 

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'telefono' ?></label> : 
				<?php echo $model->telefono?>
			</div>
		</div> 

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'email' ?></label> : 
				<?php echo $model->email?>
			</div>
		</div> 
	
		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'Hotel' ?></label> :
				<?php if (!isset($model->hotel->nombre)) {echo "--";} else {echo $model->hotelOther;} ?>
			</div>
		</div>

	 </div>


	 <div class="col-md-6">

	 	<div class="col-md-12">
			<h4><b>DATOS PAYPAL</b></h4>
			<div class="form-group">
				<label><?php echo 'orderId' ?></label> : 
				<?php echo $model->orderId?>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'payerId' ?></label> : 
				<?php echo $model->payerId?>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'payerEmail' ?></label> : 
				<?php echo $model->payerEmail?>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'payerCountry' ?></label> : 
				<?php echo $model->payerCountry?>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'payerName' ?></label> : 
				<?php echo $model->payerName?>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'paymentReference' ?></label> : 
				<?php echo $model->paymentReference?>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'paymentAmount' ?></label> : 
				<?php echo $model->paymentAmount?>
			</div>
		</div>


		<div class="col-md-12">
			<div class="form-group">
				<label><?php echo 'orderStatus' ?></label> : 
				<?php echo $model->orderStatus?>
			</div>
		</div>


	 </div>
    
</div>    
</div>


