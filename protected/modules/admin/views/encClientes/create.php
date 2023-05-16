<?php
/* @var $this EncAgenciasController */
/* @var $model EncAgencias */

$this->breadcrumbs=array(
	'Enc Agenciases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EncAgencias', 'url'=>array('index')),
	array('label'=>'Manage EncAgencias', 'url'=>array('admin')),
);
?>

<h1>Create EncAgencias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>