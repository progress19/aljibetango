<?php
/* @var $this HotelesController */
/* @var $data Hoteles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idHotel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idHotel), array('view', 'id'=>$data->idHotel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>