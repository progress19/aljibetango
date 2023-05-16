<?php
/* @var $this ShowsprivadosController */
/* @var $model Showsprivados */

$this->breadcrumbs=array(
	'Shows Privados'=>array('admin'),
	'Nuevo',
);

$this->titulo='<i class="fa fa-fw fa-calendar"></i> Nueva Fecha';
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>