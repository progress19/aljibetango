<?php
/* @var $this EncCorpoController */
/* @var $model EncCorpo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_encuesta'); ?>
		<?php echo $form->textField($model,'id_encuesta',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcli'); ?>
		<?php echo $form->textField($model,'idcli',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli'); ?>
		<?php echo $form->textField($model,'cli',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agencia'); ?>
		<?php echo $form->textField($model,'agencia',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opcion1'); ?>
		<?php echo $form->textField($model,'opcion1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opcion2'); ?>
		<?php echo $form->textField($model,'opcion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opcion3'); ?>
		<?php echo $form->textField($model,'opcion3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opcion4'); ?>
		<?php echo $form->textField($model,'opcion4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opcion5'); ?>
		<?php echo $form->textField($model,'opcion5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opcion6'); ?>
		<?php echo $form->textField($model,'opcion6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opcion7'); ?>
		<?php echo $form->textField($model,'opcion7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sugerencias'); ?>
		<?php echo $form->textArea($model,'sugerencias',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noticias'); ?>
		<?php echo $form->textField($model,'noticias',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->