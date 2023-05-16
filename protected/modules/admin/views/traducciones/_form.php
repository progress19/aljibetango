<?php
/* @var $this TraduccionesController */
/* @var $model Traducciones */
/* @var $form CActiveForm */
?>


<?php $this->menu_traducciones = 'active'; ?>


<?php /** @var TbActiveForm $form */
$form = $this->beginWidget(
'booster.widgets.TbActiveForm',
array(
'id' => 'horizontalForm',
'type' => 'horizontal',
'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)
);
?>

<?php echo $form->errorSummary($model); ?>

    <div class="col-md-9">
        <div class="box box-success">
             <div class="box-body">

	<div class="col-md-12">
	<div class="form-group">
		<img src="<?php echo URLRAIZ.'/images/es.png' ?>" alt="">
		<?php echo $form->labelEx($model,'es'); ?>
		<?php echo $form->textArea($model,'es',array('rows'=>2, 'cols'=>50,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'es'); ?>
	</div>
	</div>

	<div class="col-md-12">
	<div class="form-group">
		<img src="<?php echo URLRAIZ.'/images/pr.png' ?>" alt="">
		<?php echo $form->labelEx($model,'pr'); ?>
		<?php echo $form->textArea($model,'pr',array('rows'=>2, 'cols'=>50,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'pr'); ?>
	</div>
	</div>

	<div class="col-md-12">
	<div class="form-group">
		<img src="<?php echo URLRAIZ.'/images/en.png' ?>" alt="">
		<?php echo $form->labelEx($model,'en'); ?>
		<?php echo $form->textArea($model,'en',array('rows'=>2, 'cols'=>50,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'en'); ?>
	</div>
	</div>
<!--
	<div class="col-md-12">
	<div class="form-group">
		<img src="<?php //echo URLRAIZ.'/images/ru.png' ?>" alt="">
		<?php //echo $form->labelEx($model,'ru'); ?>
		<?php //echo $form->textArea($model,'ru',array('rows'=>2, 'cols'=>50,'class' => 'form-control')); ?>
		<?php //echo $form->error($model,'ru'); ?>
	</div>
	</div>

	<div class="col-md-12">
	<div class="form-group">
		<img src="<?php //echo URLRAIZ.'/images/fr.png' ?>" alt="">
		<?php //echo $form->labelEx($model,'fr'); ?>
		<?php //echo $form->textArea($model,'fr',array('rows'=>2, 'cols'=>50,'class' => 'form-control')); ?>
		<?php //echo $form->error($model,'fr'); ?>
	</div>
	</div>

	<div class="col-md-12">
	<div class="form-group">
		<img src="<?php //echo URLRAIZ.'/images/it.png' ?>" alt="">
		<?php //echo $form->labelEx($model,'it'); ?>
		<?php //echo $form->textArea($model,'it',array('rows'=>2, 'cols'=>50,'class' => 'form-control')); ?>
		<?php //echo $form->error($model,'it'); ?>
	</div>
	</div>

	<div class="col-md-12">
	<div class="form-group">
		<img src="<?php //echo URLRAIZ.'/images/ge.png' ?>" alt="">
		<?php //echo $form->labelEx($model,'ge'); ?>
		<?php //echo $form->textArea($model,'ge',array('rows'=>2, 'cols'=>50,'class' => 'form-control')); ?>
		<?php //echo $form->error($model,'ge'); ?>
	</div>
	</div>
-->
	<div class="col-md-12">
	<div class="form-group">
		<img src="<?php echo URLRAIZ.'/images/ch.png' ?>" alt="">
		<?php echo $form->labelEx($model,'zh'); ?>
		<?php echo $form->textArea($model,'zh',array('rows'=>2, 'cols'=>50,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'zh'); ?>
	</div>
	</div>

</div>

	<div class="box-footer">
    <div class="col-md-12">
    	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
   </div>
   </div>		

<div class="clearfix"></div>

</div>
</div>




<?php $this->endWidget(); ?>

