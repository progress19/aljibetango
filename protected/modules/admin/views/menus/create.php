<?php

$this->breadcrumbs=array(
	'Menú'=>array('admin'),
	'Nuevo',
);

$this->titulo='<i class="fa fa-fw fa-image"></i> Nueva Imágen';
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>