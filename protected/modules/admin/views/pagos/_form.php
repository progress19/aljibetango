<?php
/* @var $this PagosController */
/* @var $model Pagos */
/* @var $form CActiveForm */
?>

<?php $this->menu_pagos = 'active';  ?>

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
<div class="col-md-8">
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
 				<?php echo $form->error($model,'nombre'); ?>
				</div>

				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'email'); ?>
 					<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'email'); ?>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'Título'); ?>
 					<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'titulo'); ?>
				</div>

				<?php
				if ($model->fecha!='') {
					$model->fecha = Yii::app()->dateFormatter->format("dd/MM/yyyy", $model->fecha);
				} ?>

				<div class="col-md-3" id="divFecha">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Fecha'); ?>	
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

				<div class="col-md-3">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'Precio'); ?>
 					<?php echo $form->textField($model,'precio',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'precio'); ?>
				</div>

				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'txn_id'); ?>
 					<?php echo $form->textField($model,'txn_id',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'txn_id'); ?>
				</div>

				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'paymentstatus'); ?>
 					<?php echo $form->textField($model,'paymentstatus',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'paymentstatus'); ?>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Comentarios'); ?>
						<?php $this->widget('booster.widgets.TbCKEditor',
							array('attribute' => 'comentarios',
								'model'=> $model,
								'value'=> $model->comentarios,
								'editorOptions' => array(
									'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
									)));
									?>
								</div>
				</div>

				<div class="clearfix"></div>							

 						</div><!-- /.box-body -->

 						<div class="box-footer">
 							<div class="col-md-12">
 								<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar y Enviar</button>
 							</div><div class="clearfix"></div>
 						</div>

 					</div><!-- /.box -->
 				</div><!-- /.col-lg-8 -->


<?php $this->endWidget(); ?>






