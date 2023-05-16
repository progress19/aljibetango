<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->breadcrumbs=array(
	'Suscripciones'=>array('admin'),
	'Editar',
);
$this->menu_suscripciones = 'active';

$this->titulo='<i class="fa fa-fw fa-envelope-o"></i> Editar Suscripción';

$this->renderPartial('_form', array('model'=>$model));