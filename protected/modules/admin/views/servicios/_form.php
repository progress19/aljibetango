<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */
?>

<?php $this->menu_servicios = 'active'; ?>


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

 	<div class="col-md-12">
 		<div class="box box-success">
 			<div class="box-body">

			<div class="col-md-8">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Español</a></li>
                  <li><a href="#tab_2" data-toggle="tab">English</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Portugues</a></li>
                  <li><a href="#tab_4" data-toggle="tab">Chino</a></li>
                </ul>
                <div style="overflow: auto;" class="tab-content">
                  
                  <div class="tab-pane active" id="tab_1">
	                
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

                <div class="tab-pane" id="tab_4">
	                
					<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Descripción'); ?>
						<?php $this->widget('booster.widgets.TbCKEditor',
							array('attribute' => 'des_zh',
								'model'=> $model,
								'value'=> $model->des_zh,
								'editorOptions' => array(
									'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
									)));
									?>
								</div>
					</div>
                </div><!-- /.tab-content -->

              </div><!-- nav-tabs-custom -->
            </div>


                  </div><!-- /.tab-pane -->

				<div class="clearfix"></div>

 						</div><!-- /.box-body -->
 						
 						<div class="box-footer"><div class="col-md-12">
 							<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
 						</div>
 						</div>
 						<div class="clearfix"></div>

 					</div><!-- /.box -->
 				</div><!-- /.col-lg-8 -->


<?php $this->endWidget(); ?>



