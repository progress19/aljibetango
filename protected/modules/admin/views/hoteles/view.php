<?php
/* @var $this HotelesController */
/* @var $model Hoteles */

$this->breadcrumbs=array(
	'Hoteles'=>array('index'),
	$model->idHotel,
);

$this->menu=array(
	array('label'=>'List Hoteles', 'url'=>array('index')),
	array('label'=>'Create Hoteles', 'url'=>array('create')),
	array('label'=>'Update Hoteles', 'url'=>array('update', 'id'=>$model->idHotel)),
	array('label'=>'Delete Hoteles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idHotel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hoteles', 'url'=>array('admin')),
);
?>

<h1>View Hoteles #<?php echo $model->idHotel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idHotel',
		'nombre',
		'estado',
	),
)); ?>
