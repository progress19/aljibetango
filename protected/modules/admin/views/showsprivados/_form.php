<?php
/* @var $this ShowsprivadosController */
/* @var $model Showsprivados */
/* @var $form CActiveForm */
?>

<?php $this->menu_showsp = 'active';  ?>

<?php /** @var TbActiveForm $form */
$form = $this->beginWidget(
'booster.widgets.TbActiveForm',
array(
'id' => 'horizontalForm',
'type' => 'horizontal',
)
); ?>

<div class="col-md-4">
	<?php echo $form->errorSummary($model); ?>
</div>
<div class="clearfix"></div>

<div class="col-md-4">
<div class="box box-success">
<div class="box-body">

				<?php
				if ($model->fecha!='') {
					$model->fecha = Yii::app()->dateFormatter->format("dd/MM/yyyy", $model->fecha);
				} 
				?>

				<div class="col-md-6" id="divFecha">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Fecha del Show'); ?>	
						<?php
						$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'language'=>'es',
							'model'=>$model,
							'attribute'=>'fechaString',
							'flat'=>false,
							'options'=>array(
								'firstDay'=>1,
								'constrainInput'=>true,
								'currentText'=>'Now',
								'dateFormat'=>'dd/mm/yy',
								'buttonImageOnly'=> true,
								),
							'htmlOptions'=>array(
								'class'=>'form-control',
								'value'=>$model->fecha,
								),
							));
							?>
						</div>
					</div> 

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


