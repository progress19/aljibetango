<?php
/* @var $this HotelesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hoteles',
);

$this->menu=array(
	array('label'=>'Create Hoteles', 'url'=>array('create')),
	array('label'=>'Manage Hoteles', 'url'=>array('admin')),
);
?>

<h1>Hoteles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
