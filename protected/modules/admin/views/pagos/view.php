<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagoses'=>array('index'),
	$model->idPago,
);

$this->menu=array(
	array('label'=>'List Pagos', 'url'=>array('index')),
	array('label'=>'Create Pagos', 'url'=>array('create')),
	array('label'=>'Update Pagos', 'url'=>array('update', 'id'=>$model->idPago)),
	array('label'=>'Delete Pagos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPago),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagos', 'url'=>array('admin')),
);
?>

<h1>View Pagos #<?php echo $model->idPago; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPago',
		'nombre',
		'email',
		'titulo',
		'precio',
		'fecha',
		'comentarios',
		'txn_id',
		'paymentstatus',
		'idAdmin',
	),
)); ?>
