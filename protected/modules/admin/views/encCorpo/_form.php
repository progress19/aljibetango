<?php
/* @var $this EncCorpoController */
/* @var $model EncCorpo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enc-corpo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcli'); ?>
		<?php echo $form->textField($model,'idcli',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'idcli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli'); ?>
		<?php echo $form->textField($model,'cli',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'cli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agencia'); ?>
		<?php echo $form->textField($model,'agencia',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'agencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcion1'); ?>
		<?php echo $form->textField($model,'opcion1'); ?>
		<?php echo $form->error($model,'opcion1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcion2'); ?>
		<?php echo $form->textField($model,'opcion2'); ?>
		<?php echo $form->error($model,'opcion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcion3'); ?>
		<?php echo $form->textField($model,'opcion3'); ?>
		<?php echo $form->error($model,'opcion3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcion4'); ?>
		<?php echo $form->textField($model,'opcion4'); ?>
		<?php echo $form->error($model,'opcion4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcion5'); ?>
		<?php echo $form->textField($model,'opcion5'); ?>
		<?php echo $form->error($model,'opcion5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcion6'); ?>
		<?php echo $form->textField($model,'opcion6'); ?>
		<?php echo $form->error($model,'opcion6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcion7'); ?>
		<?php echo $form->textField($model,'opcion7'); ?>
		<?php echo $form->error($model,'opcion7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sugerencias'); ?>
		<?php echo $form->textArea($model,'sugerencias',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sugerencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noticias'); ?>
		<?php echo $form->textField($model,'noticias',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'noticias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->