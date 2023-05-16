<?php
/* @var $this VentasController */
/* @var $data Ventas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVenta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idVenta), array('view', 'id'=>$data->idVenta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idShow')); ?>:</b>
	<?php echo CHtml::encode($data->idShow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sesion')); ?>:</b>
	<?php echo CHtml::encode($data->sesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('txn_id')); ?>:</b>
	<?php echo CHtml::encode($data->txn_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentstatus')); ?>:</b>
	<?php echo CHtml::encode($data->paymentstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idHotel')); ?>:</b>
	<?php echo CHtml::encode($data->idHotel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impreso')); ?>:</b>
	<?php echo CHtml::encode($data->impreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaShow')); ?>:</b>
	<?php echo CHtml::encode($data->fechaShow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transfer')); ?>:</b>
	<?php echo CHtml::encode($data->transfer); ?>
	<br />

	*/ ?>

</div>