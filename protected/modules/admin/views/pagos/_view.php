<?php
/* @var $this PagosController */
/* @var $data Pagos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPago), array('view', 'id'=>$data->idPago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('txn_id')); ?>:</b>
	<?php echo CHtml::encode($data->txn_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentstatus')); ?>:</b>
	<?php echo CHtml::encode($data->paymentstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAdmin')); ?>:</b>
	<?php echo CHtml::encode($data->idAdmin); ?>
	<br />

	*/ ?>

</div>