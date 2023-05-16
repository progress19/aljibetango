<?php
/* @var $this TraduccionesController */
/* @var $model Traducciones */

$this->menu_traducciones = 'active';

$this->breadcrumbs=array(
	'Traducciones'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Usuarios', 'url'=>array('index')),
	array('label'=>'Nuevo usuario', 'url'=>array('create')),
);

$this->titulo='<i class="fa fa-fw fa-globe"></i> Traducciones';

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="col-md-12">
<div class="box box-success">
<div class="box-header">
<a class="btn btn-success" href="create" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo Texto</a>

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
	       'name'=>'es',
	       'value' => 'CHtml::link(recortar_texto($data->es, 50), Yii::app()->createUrl("admin/traducciones/update",array("id"=>$data->primaryKey)))',
	       'header' => 'Español',
	       'headerHtmlOptions'=>array('class'=>'flag_es','width'=>'150px','style'=>'padding-left:30px'),
	       'type'=>'raw'
		),
		array(
	       'name'=>'pr',
	       'value' => 'CHtml::link(recortar_texto($data->pr, 50), Yii::app()->createUrl("admin/traducciones/update",array("id"=>$data->primaryKey)))',
	       'headerHtmlOptions'=>array('class'=>'flag_pr','width'=>'150px','style'=>'padding-left:30px'),
	       'type'=>'raw'
		),

		array(
	       'name'=>'en',
	       'value' => 'CHtml::link(recortar_texto($data->en, 50), Yii::app()->createUrl("admin/traducciones/update",array("id"=>$data->primaryKey)))',
	       'headerHtmlOptions'=>array('class'=>'flag_en','width'=>'150px','style'=>'padding-left:30px'),
	       'type'=>'raw'
		),

		array(
	       'name'=>'zh',
	       'value' => 'CHtml::link(recortar_texto($data->zh, 50), Yii::app()->createUrl("admin/traducciones/update",array("id"=>$data->primaryKey)))',
	       'headerHtmlOptions'=>array('class'=>'flag_zh','width'=>'150px','style'=>'padding-left:30px'),
	       'type'=>'raw'
		),

		array(
		    'htmlOptions' => array('nowrap'=>'nowrap'),
		    'class'=>'booster.widgets.TbButtonColumn',
		    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/traducciones/update?id=$data->primaryKey" )', // url de la acción 'update'
		    )

  )));

 ?>


</div>
</div>
</div>