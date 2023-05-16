<?php
/* @var $this EncAgenciasController */
/* @var $model EncAgencias */

$this->breadcrumbs=array(
	'Enc Agenciases'=>array('index'),
	$model->id_encuesta=>array('view','id'=>$model->id_encuesta),
	'Update',
);

$this->menu=array(
	array('label'=>'List EncAgencias', 'url'=>array('index')),
	array('label'=>'Create EncAgencias', 'url'=>array('create')),
	array('label'=>'View EncAgencias', 'url'=>array('view', 'id'=>$model->id_encuesta)),
	array('label'=>'Manage EncAgencias', 'url'=>array('admin')),
);
?>

<h1>Update EncAgencias <?php echo $model->id_encuesta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>