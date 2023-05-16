<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */
/* @var $form CActiveForm */
?>

<?php /** @var TbActiveForm $form */
$form = $this->beginWidget(
'booster.widgets.TbActiveForm',
array(
'id' => 'horizontalForm',
'type' => 'horizontal',
)
);
 ?>

<?php echo $form->errorSummary($model); ?>

    <div class="col-md-5">
        <div class="box box-success">
             <div class="box-body">

	<div class="col-md-12">
  <div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
  </div>

  <div class="col-md-12">
	<div class="form-group">
       <?php echo $form->labelEx($model,'Estado '); ?>
       <?php echo $form->dropDownList($model,'estado',array (1=>'Activado','0'=>'Desactivado'), array ('class' => 'form-control')); ?>
    </div>
    <?php echo $form->error($model,'estado'); ?>
    </div>


</div> <!-- body -->
   <div class="box-footer">
   <div class="col-md-12">
    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
   </div>
   </div>

</div>

<?php $this->endWidget(); ?>