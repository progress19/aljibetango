<?php
/* @var $this ShowsController */
/* @var $model Shows */

$this->breadcrumbs=array(
	'Shows'=>array('admin'),
	'Nuevo',
);

$this->titulo='<i class="fa fa-fw fa-music"></i> Nuevo Show';
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>