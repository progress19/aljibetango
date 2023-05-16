<?php
/* @var $this EncCorpoController */
/* @var $model EncCorpo */

$this->menu_encuestacorpolistado = $this->menu_encuestas = 'active';

$this->breadcrumbs=array(
	'Encuestas'=>array('admin'),
	'Agencias',
);

$this->titulo = '<i class="fa fa-fw fa-bar-chart"></i> Encuesta Corporativos';

?>

<div class="col-md-8">
<div class="box box-success">
    <div class="box-header">
        <a class="btn btn-success" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/encuestas/corporativos_est" role="button"><i class="fa fa-fw fa-bar-chart"></i> Gráficos</a>
   <?php

    $this->widget(
    'booster.widgets.TbExtendedGridView',
    array(
    // 40px is the height of the main navigation at bootstrap
    'filter'=>$model,
    'type' => 'striped',
    'dataProvider'=>$model->search(),
    'responsiveTable' => true,
    'template'=>'{summary}{items}{pager}',
    'enablePagination' => true,

    'columns'=>array(

    array(
           'name'=>'id_encuesta',
           'value' => 'CHtml::link($data->id_encuesta, Yii::app()->createUrl("admin/EncCorpo/view/",array("id"=>$data->primaryKey)))',
           'header' => 'Id Encuesta',
           'headerHtmlOptions'=>array('width'=>'100px'),
           'type'=>'raw'
        ),

    array(
        'name'=>'Fecha',
        'filter'=>'',
        'type'=>'html', 
        'value'=>'($data->fecha=="")?"Error":Yii::app()->dateFormatter->format("dd/MM/yyyy", $data->fecha)',
        'headerHtmlOptions'=>array('height'=>'10px'),
     ), 

    array(
        'name'=>'idcli',
          ),

    array(
        'name'=>'cli',
           ),

    array(  
        'class' => 'booster.widgets.TbToggleColumn',
        'name' => 'estado',
        'header' => 'Estado',
        'filter'=>array('1'=>'Activado','0'=>'Desactivado'),
        ),
   	
 array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'template'=> '{view} {delete}', 
    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/EncCorpo/view?id=$data->id_encuesta" )', // url de la acción 'update'
    )
    ),
    )
    );

?>

</div><!-- /.box-header -->
</div>  
</div>


