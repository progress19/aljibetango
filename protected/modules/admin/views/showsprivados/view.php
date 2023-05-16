<?php
/* @var $this ShowsprivadosController */
/* @var $model Showsprivados */

$this->breadcrumbs=array(
	'Showsprivadoses'=>array('index'),
	$model->idShowPrivado,
);

$this->menu=array(
	array('label'=>'List Showsprivados', 'url'=>array('index')),
	array('label'=>'Create Showsprivados', 'url'=>array('create')),
	array('label'=>'Update Showsprivados', 'url'=>array('update', 'id'=>$model->idShowPrivado)),
	array('label'=>'Delete Showsprivados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idShowPrivado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Showsprivados', 'url'=>array('admin')),
);
?>

<h1>View Showsprivados #<?php echo $model->idShowPrivado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idShowPrivado',
		'fecha',
		'estado',
	),
)); ?>
