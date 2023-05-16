<?php

$this->breadcrumbs=array(
	'Menú'=>array('admin'),
	'Editar',
);

$this->titulo='<span class="fa fa-fw fa-image"></span> Editar Imágen ';
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>