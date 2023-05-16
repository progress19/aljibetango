<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->menu_suscripciones = 'active';

$this->breadcrumbs=array(
	'Suscripciones'=>array('admin'),
	$model->email,
);

$this->titulo='Suscripciones '. $model->email;

?>


<div class="row">
<div class="col-md-8">
<div class="box box-primary">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'email',
        'estado' => array(
           'name' => 'estado',
           'value'=>($model->estado=="1")?("Activado"):("Desactivado")),
   	),
)); ?>

<div class="box-footer">

<?php
	echo CHtml::link('<span class="glyphicon glyphicon-trash"></span> Borrar', array('Newsletter/delete', 'id'=>$model->idNew),
	array(
	'submit'=>array('Newsletter/delete', 'id'=>$model->idNew),
	'class' => 'btn btn-danger','confirm'=>'Esta seguro de borrar el registro?'
	));
?>

<?php
	echo CHtml::link('<span class="glyphicon glyphicon-edit"></span> Editar', array('Newsletter/update', 'id'=>$model->idNew),
	array(
	'submit'=>array('Newsletter/update', 'id'=>$model->idNew),
	'class' => 'btn btn-primary'
	));
?>
     
</div>

</div>
</div>


</div>
