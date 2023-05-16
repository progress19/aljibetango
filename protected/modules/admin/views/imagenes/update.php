<?php

$this->breadcrumbs=array(
	'Portada'=>array('admin'),
	'Editar',
);

$this->titulo='<span class="glyphicon glyphicon-film"></span> Editar Imágen ';
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>