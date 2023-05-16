<?php
/* @var $this TraduccionesController */
/* @var $model Traducciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTraduccion'); ?>
		<?php echo $form->textField($model,'idTraduccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'es'); ?>
		<?php echo $form->textArea($model,'es',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru'); ?>
		<?php echo $form->textArea($model,'ru',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fr'); ?>
		<?php echo $form->textArea($model,'fr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'it'); ?>
		<?php echo $form->textArea($model,'it',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ge'); ?>
		<?php echo $form->textArea($model,'ge',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ja'); ?>
		<?php echo $form->textArea($model,'ja',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr'); ?>
		<?php echo $form->textArea($model,'pr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en'); ?>
		<?php echo $form->textArea($model,'en',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->