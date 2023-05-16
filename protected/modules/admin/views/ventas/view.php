<?php
/* @var $this VentasController */
/* @var $model Ventas */

$this->menu_ventas = 'active';

$this->breadcrumbs=array(
	'Ventas'=>array('admin'), 'Ver Venta',
	);

$this->titulo='<i class="fa fa-fw fa-shopping-cart"></i> Ventas';

?>

<div class="col-md-8">

<div class="box box-success" style="font-size: 15px;">
    <div class="box-header">

    <div class="col-md-6">
	<div class="form-group">
		<label><?php echo 'idVenta' ?></label> : 
		<?php echo $model->idVenta?>
	</div>
	</div> 

	<div class="clearfix"></div>
    
	<div class="col-md-4">
	<div class="form-group">
		<label><?php echo 'Fecha' ?></label> : 
		<?php echo date('d/m/Y', $model->fecha);?>
	</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-md-4">
	<div class="form-group">
		<label><?php echo 'Show' ?></label> :
		<?php //echo $model->show->titulo_es;?>

		<?php 

		$nombre = Ventas::getNombreShow($model->idShow);
		echo $nombre;

		?>

	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		<label><?php echo 'Fecha del Show' ?></label> :
		<?php echo date('d/m/Y', $model->fechaShow);?>
	</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-md-4">
	<div class="form-group">
		<label><?php echo 'Cliente' ?></label> :
		<?php echo $model->cliente->apellido;?>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		<label><?php echo 'Cantidad' ?></label> :
		<?php echo $model->cantidad;?>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		<label><?php echo 'Hotel' ?></label> :
		<?php if (!isset($model->hotel->nombre)) {echo "--";} else {echo $model->hotel->nombre;} ?>
	</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-md-4">
	<div class="form-group">
		<label><?php echo 'N° de Transacción' ?></label> :
		<?php echo $model->txn_id;?>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		<label><?php echo 'Estado de Pago' ?></label> :
		<?php echo $model->paymentstatus;?>
	</div>
	</div>
    
</div>    
</div>


