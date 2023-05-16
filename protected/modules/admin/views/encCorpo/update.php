<?php
/* @var $this EncCorpoController */
/* @var $model EncCorpo */

$this->breadcrumbs=array(
	'Enc Corpos'=>array('index'),
	$model->id_encuesta=>array('view','id'=>$model->id_encuesta),
	'Update',
);

$this->menu=array(
	array('label'=>'List EncCorpo', 'url'=>array('index')),
	array('label'=>'Create EncCorpo', 'url'=>array('create')),
	array('label'=>'View EncCorpo', 'url'=>array('view', 'id'=>$model->id_encuesta)),
	array('label'=>'Manage EncCorpo', 'url'=>array('admin')),
);
?>

<h1>Update EncCorpo <?php echo $model->id_encuesta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>