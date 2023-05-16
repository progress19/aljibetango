<?php
/* @var $this ShowsController */
/* @var $model Shows */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idShow'); ?>
		<?php echo $form->textField($model,'idShow',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_es'); ?>
		<?php echo $form->textField($model,'titulo_es',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_en'); ?>
		<?php echo $form->textField($model,'titulo_en',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_pr'); ?>
		<?php echo $form->textField($model,'titulo_pr',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_ja'); ?>
		<?php echo $form->textField($model,'titulo_ja',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_ge'); ?>
		<?php echo $form->textField($model,'titulo_ge',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_it'); ?>
		<?php echo $form->textField($model,'titulo_it',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_fr'); ?>
		<?php echo $form->textField($model,'titulo_fr',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_ru'); ?>
		<?php echo $form->textField($model,'titulo_ru',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_es'); ?>
		<?php echo $form->textArea($model,'des_es',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_en'); ?>
		<?php echo $form->textArea($model,'des_en',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_pr'); ?>
		<?php echo $form->textArea($model,'des_pr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_ja'); ?>
		<?php echo $form->textArea($model,'des_ja',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_ge'); ?>
		<?php echo $form->textArea($model,'des_ge',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_it'); ?>
		<?php echo $form->textArea($model,'des_it',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_fr'); ?>
		<?php echo $form->textArea($model,'des_fr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_ru'); ?>
		<?php echo $form->textArea($model,'des_ru',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disponibilidad'); ?>
		<?php echo $form->textField($model,'disponibilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechasNo'); ?>
		<?php echo $form->textArea($model,'fechasNo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precioTransfer'); ?>
		<?php echo $form->textField($model,'precioTransfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagen'); ?>
		<?php echo $form->textField($model,'imagen',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->