<?php
/* @var $this TraduccionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Traducciones',
);

$this->menu=array(
	array('label'=>'Create Traducciones', 'url'=>array('create')),
	array('label'=>'Manage Traducciones', 'url'=>array('admin')),
);
?>

<h1>Traducciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
