<?php
/* @var $this VentasController */
/* @var $model Ventas */

$this->breadcrumbs=array(
	'Ventases'=>array('index'),
	$model->idVenta=>array('view','id'=>$model->idVenta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ventas', 'url'=>array('index')),
	array('label'=>'Create Ventas', 'url'=>array('create')),
	array('label'=>'View Ventas', 'url'=>array('view', 'id'=>$model->idVenta)),
	array('label'=>'Manage Ventas', 'url'=>array('admin')),
);
?>

<h1>Update Ventas <?php echo $model->idVenta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>