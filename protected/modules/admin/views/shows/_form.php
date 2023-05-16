<?php
/* @var $this ShowsController */
/* @var $model Shows */
/* @var $form CActiveForm */
?>

<?php $this->menu_shows = 'active';  ?>


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

 	<div class="col-md-10">
 		<div class="box box-success">
 			<div class="box-body">

			<div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Español</a></li>
                  <li><a href="#tab_2" data-toggle="tab">English</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Portugues</a></li>
 				  <li><a href="#tab_9" data-toggle="tab">Chino</a></li>
                </ul>
                <div style="overflow: auto;" class="tab-content">
                  
                  <div class="tab-pane active" id="tab_1">
	                
	                <div class="col-md-8">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Título'); ?>
						<?php echo $form->textField($model,'titulo_es',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
						<?php echo $form->error($model,'titulo_es'); ?>
					</div>	
				    </div>

				    <div class="col-md-4">
				    	<a target="_new" style="float: right;" class="btn btn-success" href="<?php echo URLRAIZ.'/shop/'.$model->idShow.'/'.urls_amigables($model->titulo_es).'/es'; ?>">	
				    	<span class="glyphicon glyphicon-link" aria-hidden="true"></span> URL Link Español
				    	</a>
				    </div>

					<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Descripción'); ?>
						<?php $this->widget('booster.widgets.TbCKEditor',
							array('attribute' => 'des_es',
								'model'=> $model,
								'value'=> $model->des_es,
								'editorOptions' => array(
									'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
									)));
									?>
								</div>
					</div>

                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="tab_2">
	                
	                <div class="col-md-8">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Título'); ?>
						<?php echo $form->textField($model,'titulo_en',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
						<?php echo $form->error($model,'titulo_en'); ?>
					</div>	
				    </div>

				    <div class="col-md-4">
				    	<a target="_new" style="float: right;" class="btn btn-success" href="<?php echo URLRAIZ.'/shop/'.$model->idShow.'/'.urls_amigables($model->titulo_en).'/en'; ?>">	
				    	<span class="glyphicon glyphicon-link" aria-hidden="true"></span> URL Link Inglés
				    	</a>
				    </div>

					<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Descripción'); ?>
						<?php $this->widget('booster.widgets.TbCKEditor',
							array('attribute' => 'des_en',
								'model'=> $model,
								'value'=> $model->des_en,
								'editorOptions' => array(
									'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
									)));
									?>
								</div>
					</div>

                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="tab_3">
	                
	                <div class="col-md-8">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Título'); ?>
						<?php echo $form->textField($model,'titulo_pr',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
						<?php echo $form->error($model,'titulo_pr'); ?>
					</div>	
				    </div>

				    <div class="col-md-4">
				    	<a target="_new" style="float: right;" class="btn btn-success" href="<?php echo URLRAIZ.'/shop/'.$model->idShow.'/'.urls_amigables($model->titulo_pr).'/pt'; ?>">	
				    	<span class="glyphicon glyphicon-link" aria-hidden="true"></span> URL Link Portugués
				    	</a>
				    </div>

					<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Descripción'); ?>
						<?php $this->widget('booster.widgets.TbCKEditor',
							array('attribute' => 'des_pr',
								'model'=> $model,
								'value'=> $model->des_pr,
								'editorOptions' => array(
									'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
									)));
									?>
								</div>
					</div>
                </div><!-- /.tab-content -->

                <div class="tab-pane" id="tab_9">
	                
	                <div class="col-md-8">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Título'); ?>
						<?php echo $form->textField($model,'titulo_zh',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
						<?php echo $form->error($model,'titulo_zh'); ?>
					</div>	
				    </div>

				    <div class="col-md-4">
				    	<a target="_new" style="float: right;" class="btn btn-success" href="<?php echo URLRAIZ.'/shop/'.$model->idShow.'/'.urls_amigables($model->titulo_en).'/zh'; ?>">	
				    	<span class="glyphicon glyphicon-link" aria-hidden="true"></span> URL Link Chino
				    	</a>
				    </div>

					<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Descripción'); ?>
						<?php $this->widget('booster.widgets.TbCKEditor',
							array('attribute' => 'des_zh',
								'model'=> $model,
								'value'=> $model->des_zh,
								'editorOptions' => array(
									'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects',
									)));
									?>
								</div>
					</div>

                  </div><!-- /.tab-pane -->

              </div><!-- nav-tabs-custom -->
            </div>


                  </div><!-- /.tab-pane -->

            <div class="col-md-12">

				<div class="col-md-2">
				<div class="form-group">
					<?php echo $form->labelEx($model,'precio'); ?>
					<?php echo $form->textField($model,'precio',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
					<?php echo $form->error($model,'precio'); ?>
				</div>	
			    </div>
			    
			    <div class="col-md-2">
				<div class="form-group">
					<?php echo $form->labelEx($model,'disponibilidad'); ?>
					<?php echo $form->textField($model,'disponibilidad',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
					<?php echo $form->error($model,'disponibilidad'); ?>
				</div>	
			    </div>

			    <div class="col-md-2">
				<div class="form-group">
					<?php echo $form->labelEx($model,'capacidad'); ?>
					<?php echo $form->textField($model,'capacidad',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
					<?php echo $form->error($model,'capacidad'); ?>
				</div>	
			    </div>

				<div class="col-md-2">
				<div class="form-group">
					<?php echo $form->labelEx($model,'precioTransfer'); ?>
					<?php echo $form->textField($model,'precioTransfer',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
					<?php echo $form->error($model,'precioTransfer'); ?>
				</div>	
			    </div>

				
				<div class="clearfix"></div>

			    <div class="col-md-12">
				<div class="form-group">
					<?php echo $form->labelEx($model,'todoslosdias', array('style' => 'padding-right: 10px;')); ?>
					<?php echo $form->checkBox($model,'todoslosdias', array('value'=>'on', 'uncheckValue'=>'', 'onchange' => 'selectTodosLosDias()')); ?>
				</div>
				</div>

				<?php
				if ($model->fecha!='') {
					$model->fecha = Yii::app()->dateFormatter->format("dd/MM/yyyy", $model->fecha);
				}
				if ($model->hasta!='') {
					$model->hasta = Yii::app()->dateFormatter->format("dd/MM/yyyy", $model->hasta);
				} ?>

				<div class="col-md-2" id="divFecha">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Desde'); ?>	
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

					<div class="col-md-2" id="divHasta">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Hasta'); ?>	
						<?php
						$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'language'=>'es',
							'model'=>$model,
							'attribute'=>'hastaString',
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
								'value'=>$model->hasta,
								),
							));
							?>
						</div>
					</div>

<!--
				<div class="col-md-12">
				<div class="form-group">
					<?php //echo $form->labelEx($model,'soldout', array('style' => 'padding-right: 10px;')); ?>
					<?php //echo $form->checkBox($model,'soldout', array('value'=>'on', 'uncheckValue'=>'')); ?>
				</div>
				</div>

				<div class="col-md-12">
				<div class="form-group">
					<?php //echo $form->labelEx($model,'adwords', array('style' => 'padding-right: 10px;')); ?>
					<?php //echo $form->checkBox($model,'adwords', array('value'=>'on', 'uncheckValue'=>'')); ?>
				</div>
				</div>
-->

			<div class="col-md-2">
				<div class="form-group">
					<?php echo $form->labelEx($model,'Hora Cena'); ?>
					<?php echo $form->textField($model,'hora_cena',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
					<?php echo $form->error($model,'hora_cena'); ?>
				</div>	
			</div>

			<div class="col-md-2">
				<div class="form-group">
					<?php echo $form->labelEx($model,'Hora Show'); ?>
					<?php echo $form->textField($model,'hora_show',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
					<?php echo $form->error($model,'hora_show'); ?>
				</div>	
			</div>

				<div class="col-md-3">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Duracion (min)'); ?>
						<?php echo $form->textField($model,'duracion',array('size'=>60,'maxlength'=>128,'class' => 'form-control')); ?>
						<?php echo $form->error($model,'duracion'); ?>
					</div>	
			    </div>

				<div class="col-md-12">
				<div class="form-group">
					<?php echo $form->labelEx($model,'Imagen (900px x 600px)'); ?>
					<?php echo CHtml::activeFileField($model, 'imagen'); ?> 
					<?php echo $form->error($model,'imagen'); ?>
				</div>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-2">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Estado '); ?>
						<?php echo $form->dropDownList($model,'estado',array (1=>'Activado','0'=>'Desactivado'), array ('class' => 'form-control')); ?>
					</div>
					<?php echo $form->error($model,'estado'); ?>
				</div>

				<div class="clearfix">	</div>

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
 				<div class="col-md-2">
 					<!-- general form elements -->
 					<div class="box box-success">

 						<?php if($model->isNewRecord!='1'){ ?>
 						<?php echo CHtml::image(Yii::app()->request->baseUrl.'/pics/shows/'.$model->imagen,"imagen", array('class' => 'img-responsive' )); ?>  
 						<?php } ?>

 					</div><!-- /.box -->
 				</div><!-- /.col-lg-6 -->

<?php $this->endWidget(); ?>

<?php if ($model->todoslosdias=='on') : ?>
	<script>
		  $('#divFecha').addClass( 'displayNone' ); 
		  $('#divHasta').addClass( 'displayNone' );  
	</script>
<?php endif ?>

