<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->menu_clientes = 'active';

$this->breadcrumbs=array(
	'Clientes'=>array('admin'),
	'Editar',
);

$this->titulo='<i class="fa fa-fw fa-users"></i> Editar Cliente '. $model->apellido;

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>