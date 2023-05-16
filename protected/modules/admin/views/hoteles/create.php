<?php
/* @var $this HotelesController */
/* @var $model Hoteles */

$this->breadcrumbs=array(
	'Hoteles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hoteles', 'url'=>array('index')),
	array('label'=>'Manage Hoteles', 'url'=>array('admin')),
);
?>

<h1>Create Hoteles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>