<?php
/* @var $this EncAgenciasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enc Agenciases',
);

$this->menu=array(
	array('label'=>'Create EncAgencias', 'url'=>array('create')),
	array('label'=>'Manage EncAgencias', 'url'=>array('admin')),
);
?>

<h1>Enc Agenciases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
