<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagos'=>array('admin'),
	'Nuevo',
);

$this->titulo='<i class="fa fa-fw fa-dollar"></i> Nuevo pago';
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>