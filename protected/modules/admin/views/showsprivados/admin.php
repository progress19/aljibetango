<?php
/* @var $this ShowsprivadosController */
/* @var $model Showsprivados */

$this->menu_showsp = 'active';

$this->breadcrumbs=array(
	'Shows Privados'=>array('index'),
	'Administrar',
);


$this->titulo='<i class="fa fa-fw fa-calendar"></i> Shows Privados';

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

<div class="col-md-4">
<div class="box box-success">
<div class="box-header">
<a class="btn btn-success" href="create" role="button"><span class="glyphicon glyphicon-plus"></span> Nueva Fecha</a>

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
	       'name'=>'fecha',
	       'value' => 'CHtml::link(Yii::app()->dateFormatter->format("dd/MM/yyyy", $data->fecha), Yii::app()->createUrl("admin/showsprivados/update",array("id"=>$data->primaryKey)))',
	       'header' => 'Fecha',
	       'headerHtmlOptions'=>array('width'=>'150px'),
	       'type'=>'raw'
		),
		
	 array(
	    'htmlOptions' => array('nowrap'=>'nowrap'),
	    'template' => '{update} {view} {delete}',
	    'class'=>'booster.widgets.TbButtonColumn',
	    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/showsprivados/update?id=$data->idShowPrivado")', // url de la acción 'update'
	    )
  ))  
   );

 ?>

</div>
</div>
</div>


