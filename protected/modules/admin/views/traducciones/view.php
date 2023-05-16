<?php
/* @var $this TraduccionesController */
/* @var $model Traducciones */

$this->breadcrumbs=array(
	'Traducciones'=>array('index'),
	$model->idTraduccion,
);

$this->menu=array(
	array('label'=>'List Traducciones', 'url'=>array('index')),
	array('label'=>'Create Traducciones', 'url'=>array('create')),
	array('label'=>'Update Traducciones', 'url'=>array('update', 'id'=>$model->idTraduccion)),
	array('label'=>'Delete Traducciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTraduccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Traducciones', 'url'=>array('admin')),
);
?>

<h1>View Traducciones #<?php echo $model->idTraduccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTraduccion',
		'campo',
		'es',
		'ru',
		'fr',
		'it',
		'ge',
		'ja',
		'pr',
		'en',
	),
)); ?>
