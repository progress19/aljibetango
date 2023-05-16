<?php
/* @var $this EncCorpoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enc Corpos',
);

$this->menu=array(
	array('label'=>'Create EncCorpo', 'url'=>array('create')),
	array('label'=>'Manage EncCorpo', 'url'=>array('admin')),
);
?>

<h1>Enc Corpos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
