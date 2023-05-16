<?php
/* @var $this VentasController */
/* @var $model Ventas */

$this->menu_ondemand = 'active';

$this->breadcrumbs=array(
	'Ondemand'=>array('admin'), 'Ver Reserva',
	);

$this->titulo='<i class="fa fa-video-camera" aria-hidden="true"></i> Ondemand';

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


