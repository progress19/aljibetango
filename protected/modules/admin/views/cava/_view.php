<?php
/* @var $this ShowsController */
/* @var $data Shows */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idShow')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idShow), array('view', 'id'=>$data->idShow)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_es')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_es); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_en')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_pr')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_pr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_ja')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_ja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_ge')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_ge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_it')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_it); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_fr')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_fr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_ru')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_es')); ?>:</b>
	<?php echo CHtml::encode($data->des_es); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_en')); ?>:</b>
	<?php echo CHtml::encode($data->des_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_pr')); ?>:</b>
	<?php echo CHtml::encode($data->des_pr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_ja')); ?>:</b>
	<?php echo CHtml::encode($data->des_ja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_ge')); ?>:</b>
	<?php echo CHtml::encode($data->des_ge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_it')); ?>:</b>
	<?php echo CHtml::encode($data->des_it); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_fr')); ?>:</b>
	<?php echo CHtml::encode($data->des_fr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_ru')); ?>:</b>
	<?php echo CHtml::encode($data->des_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disponibilidad')); ?>:</b>
	<?php echo CHtml::encode($data->disponibilidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechasNo')); ?>:</b>
	<?php echo CHtml::encode($data->fechasNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioTransfer')); ?>:</b>
	<?php echo CHtml::encode($data->precioTransfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>