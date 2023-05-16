<?php
/* @var $this TraduccionesController */
/* @var $data Traducciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTraduccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTraduccion), array('view', 'id'=>$data->idTraduccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo')); ?>:</b>
	<?php echo CHtml::encode($data->campo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('es')); ?>:</b>
	<?php echo CHtml::encode($data->es); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru')); ?>:</b>
	<?php echo CHtml::encode($data->ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fr')); ?>:</b>
	<?php echo CHtml::encode($data->fr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('it')); ?>:</b>
	<?php echo CHtml::encode($data->it); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ge')); ?>:</b>
	<?php echo CHtml::encode($data->ge); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ja')); ?>:</b>
	<?php echo CHtml::encode($data->ja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr')); ?>:</b>
	<?php echo CHtml::encode($data->pr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en')); ?>:</b>
	<?php echo CHtml::encode($data->en); ?>
	<br />

	*/ ?>

</div>