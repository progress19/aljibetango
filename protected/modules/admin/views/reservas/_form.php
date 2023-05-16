<?php
/* @var $this VentasController */
/* @var $model Ventas */
/* @var $form CActiveForm */
?>



<div class="col-md-9">
<div class="box box-success">
<div class="box-body">

<?php /** @var TbActiveForm $form */
$form = $this->beginWidget(
'booster.widgets.TbActiveForm',
array(
'id' => 'horizontalForm',
'type' => 'horizontal',
)
); ?>

	<?php echo $form->errorSummary($model); ?>
    
 	<div class="col-md-4">
    <div class="form-group">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
	</div>	
	
    </div>

    <div class="col-md-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'Cliente'); ?>
		<?php echo $form->textField($model,'cliente->apellido',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
	</div>	
    </div>
   
    
    <div class="clearfix"></div>          
</div><!-- /.box -->
<div class="box-footer">
   <div class="col-md-12">
        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
    </div>
    <div class="clearfix"></div>
</div>
</div><!-- /.col-lg-6 -->
</div><!-- /.row -->



<?php $this->endWidget(); ?>
