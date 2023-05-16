<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>


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
<div class="col-md-12">
	<?php echo $form->errorSummary($model); ?>
</div>	

 <!-- Main content -->
          
 	<div class="col-md-8">
 		<div class="box box-success">
 			<div class="box-body">

 				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'Nombre'); ?>
 					<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'titulo'); ?>
				</div>

				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'Apellido'); ?>
 					<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'apellido'); ?>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'Email'); ?>
 					<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'email'); ?>
				</div>

				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'Teléfono'); ?>
 					<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'telefono'); ?>
				</div>


				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'Ciudad'); ?>
 					<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'ciudad'); ?>
				</div>

	<div class="col-md-3">
		<div class="form-group">
			<?php echo $form->labelEx($model,'País'); ?>
			<?php echo $form->dropDownList($model,'idPais',
			 CHtml::listData(Paises::model()->findAll(array('order' => 'nombre ASC')), 'idPais', 'nombre'),
			                array(
								'class' => 'form-control',
			                    'prompt' => 'Seleccione un País'
			           			 ))?>
		</div>
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

 						<div class="box-footer">
 							<div class="col-md-12">
 								<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
 							</div><div class="clearfix"></div>
 						</div>

 					</div><!-- /.box -->
 				</div><!-- /.col-lg-8 -->


<?php $this->endWidget(); ?>

