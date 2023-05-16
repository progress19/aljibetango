<?php
/* @var $this ShowsController */
/* @var $model Shows */

$this->breadcrumbs=array(
	'Shows'=>array('index'),
	$model->idShow,
);

$this->menu=array(
	array('label'=>'List Shows', 'url'=>array('index')),
	array('label'=>'Create Shows', 'url'=>array('create')),
	array('label'=>'Update Shows', 'url'=>array('update', 'id'=>$model->idShow)),
	array('label'=>'Delete Shows', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idShow),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Shows', 'url'=>array('admin')),
);
?>

<h1>View Shows #<?php echo $model->idShow; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idShow',
		'titulo_es',
		'titulo_en',
		'titulo_pr',
		'titulo_ja',
		'titulo_ge',
		'titulo_it',
		'titulo_fr',
		'titulo_ru',
		'des_es',
		'des_en',
		'des_pr',
		'des_ja',
		'des_ge',
		'des_it',
		'des_fr',
		'des_ru',
		'precio',
		'disponibilidad',
		'fecha',
		'fechasNo',
		'precioTransfer',
		'imagen',
		'estado',
	),
)); ?>
