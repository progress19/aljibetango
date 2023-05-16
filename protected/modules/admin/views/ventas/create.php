<?php
/* @var $this VentasController */
/* @var $model Ventas */

$this->breadcrumbs=array(
	'Ventases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ventas', 'url'=>array('index')),
	array('label'=>'Manage Ventas', 'url'=>array('admin')),
);
?>

<h1>Create Ventas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>