<?php
/* @var $this EncAgenciasController */
/* @var $model EncAgencias */

$this->menu_encuestaagencialistado = $this->menu_encuestas = 'active';

$this->breadcrumbs=array(
	'Encuestas'=>array('admin'),
	'Agencias',
);

$this->titulo = '<i class="fa fa-fw fa-bar-chart"></i> Encuesta Clientes';

?>

<div class="col-md-8">
<div class="box box-success">
    <div class="box-header">
        
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
           'name'=>'id',
           'value' => 'CHtml::link($data->id, Yii::app()->createUrl("admin/EncClientes/view/",array("id"=>$data->primaryKey)))',
           'header' => 'Id Encuesta',
           'headerHtmlOptions'=>array('width'=>'100px'),
           'type'=>'raw'
        ),

        array('name'=>'nombre',),
        array('name'=>'email',),
       
        array(
            'name' => 'idPais',
            'value' => '$data->pais_rel->nombre',
            //'filter'=> CHtml::listData(Paises::model()->findAll(array('order'=>'nombre')),'idPais','nombre'),
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
            'viewButtonUrl'=>'Yii::app()->createUrl("/admin/EncClientes/view?id=$data->id" )', // url de la acción 'update'
        )

        ),
    ));

?>

</div><!-- /.box-header -->
</div>  
</div>


