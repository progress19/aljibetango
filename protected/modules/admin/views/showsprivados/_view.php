<?php
/* @var $this ShowsprivadosController */
/* @var $data Showsprivados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idShowPrivado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idShowPrivado), array('view', 'id'=>$data->idShowPrivado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>