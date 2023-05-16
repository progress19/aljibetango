<?php
/* @var $this EncCorpoController */
/* @var $model EncCorpo */

$this->breadcrumbs=array(
	'Enc Corpos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EncCorpo', 'url'=>array('index')),
	array('label'=>'Manage EncCorpo', 'url'=>array('admin')),
);
?>

<h1>Create EncCorpo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>