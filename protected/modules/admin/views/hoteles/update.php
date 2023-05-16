<?php
/* @var $this HotelesController */
/* @var $model Hoteles */

$this->breadcrumbs=array(
	'Hoteles'=>array('index'),
	$model->idHotel=>array('view','id'=>$model->idHotel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hoteles', 'url'=>array('index')),
	array('label'=>'Create Hoteles', 'url'=>array('create')),
	array('label'=>'View Hoteles', 'url'=>array('view', 'id'=>$model->idHotel)),
	array('label'=>'Manage Hoteles', 'url'=>array('admin')),
);
?>

<h1>Update Hoteles <?php echo $model->idHotel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>