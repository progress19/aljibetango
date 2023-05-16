<?php
/* @var $this EncAgenciasController */
/* @var $data EncAgencias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_encuesta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_encuesta), array('view', 'id'=>$data->id_encuesta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcli')); ?>:</b>
	<?php echo CHtml::encode($data->idcli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli')); ?>:</b>
	<?php echo CHtml::encode($data->cli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agencia')); ?>:</b>
	<?php echo CHtml::encode($data->agencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcion1')); ?>:</b>
	<?php echo CHtml::encode($data->opcion1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcion2')); ?>:</b>
	<?php echo CHtml::encode($data->opcion2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('opcion3')); ?>:</b>
	<?php echo CHtml::encode($data->opcion3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcion4')); ?>:</b>
	<?php echo CHtml::encode($data->opcion4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcion5')); ?>:</b>
	<?php echo CHtml::encode($data->opcion5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcion6')); ?>:</b>
	<?php echo CHtml::encode($data->opcion6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sugerencias')); ?>:</b>
	<?php echo CHtml::encode($data->sugerencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noticias')); ?>:</b>
	<?php echo CHtml::encode($data->noticias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>