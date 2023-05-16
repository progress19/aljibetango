<?php
/* @var $this ShowsprivadosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Showsprivadoses',
);

$this->menu=array(
	array('label'=>'Create Showsprivados', 'url'=>array('create')),
	array('label'=>'Manage Showsprivados', 'url'=>array('admin')),
);
?>

<h1>Showsprivadoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
