
<?php $this->menu_imagenes = $this->menu_imagenes_n = 'active';  ?>

<?php /** @var TbActiveForm $form */
$form = $this->beginWidget(
'booster.widgets.TbActiveForm',
array(
'id' => 'horizontalForm',
'type' => 'horizontal',
'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
));
?>	

<?php echo $form->errorSummary($model); ?>

 <!-- Main content -->
          

 	<div class="col-md-6">
 		<div class="box box-success">
 			<div class="box-body">

				<div class="col-md-12">
				<div class="form-group">
					<?php echo $form->labelEx($model,'Imagen (800px x 600px)'); ?>
					<?php echo CHtml::activeFileField($model, 'imagen'); ?> 
					<?php echo $form->error($model,'imagen'); ?>
				</div>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-2">
					<div class="form-group">	
						<?php echo $form->labelEx($model,'orden'); ?>
						<?php echo $form->textField($model,'orden',array('size'=>60,'maxlength'=>2,'class' => 'form-control')); ?>
					</div>
					<?php echo $form->error($model,'orden'); ?>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-3">
				<div class="form-group">
					<?php echo $form->labelEx($model,'Estado '); ?>
					<?php echo $form->dropDownList($model,'estado',array (1=>'Activado','0'=>'Desactivado'), array ('class' => 'form-control')); ?>
				</div>
				<?php echo $form->error($model,'estado'); ?>
				</div>

				<div class="clearfix"></div>

 			</div><!-- /.box-body -->
 						
 						<div class="box-footer"><div class="col-md-12">
 							<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
 						</div>
 						</div>
 						<div class="clearfix"></div>

 					</div><!-- /.box -->
 				</div><!-- /.col-lg-8 -->

 				<!-- derecha -->
 				<div class="col-md-6">
 					<!-- general form elements -->
 					<div class="box box-success">

 						<?php if($model->isNewRecord!='1'){ ?>
 						<?php echo CHtml::image(Yii::app()->request->baseUrl.'/pics/imagenes/'.$model->imagen,"imagen", array('class' => 'img-responsive'  )); ?>  
 						<?php } ?>

 					</div><!-- /.box -->
 				</div><!-- /.col-lg-6 -->



<?php $this->endWidget(); ?>