<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */

$this->breadcrumbs=array(
	'Imagenes'=>array('index'),
	$model->idImagen,
);

$this->menu=array(
	array('label'=>'List Imagenes', 'url'=>array('index')),
	array('label'=>'Create Imagenes', 'url'=>array('create')),
	array('label'=>'Update Imagenes', 'url'=>array('update', 'id'=>$model->idImagen)),
	array('label'=>'Delete Imagenes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idImagen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Imagenes', 'url'=>array('admin')),
);
?>

<h1>View Imagenes #<?php echo $model->idImagen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idImagen',
		'imagen',
		'estado',
	),
)); ?>
