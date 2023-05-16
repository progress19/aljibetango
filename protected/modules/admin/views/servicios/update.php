<?php
/* @var $this ShowsController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicios');


switch ($model->idServicio) {
	case '1':
		$titulo = 'Experiencia Argentina';
		break;

	case '2':
		$titulo = 'Cava';
		break;

	case '3':
		$titulo = 'Escuela';
		break;
	
}

$this->titulo='<i class="fa fa-bars"></i> Servicios / '.$titulo;

$this->renderPartial('_form', array('model'=>$model));