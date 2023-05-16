<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->menu_pagos = 'active';

$this->breadcrumbs=array(
	'Pagos'=>array('admin'),
	'Administrador',
);



$this->titulo = '<i class="fa fa-fw fa-dollar"></i> Pagos';

?>

<div class="col-md-12">
<div class="box box-success">
    <div class="box-header">
        <a class="btn btn-success" href="create" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo Pago</a>
    
<?php

    $this->widget(
    'booster.widgets.TbExtendedGridView',
    array(
    // 40px is the height of the main navigation at bootstrap
    'filter'=>$model,
    'type' => 'striped',
    'dataProvider'=>$model->search(),
    'responsiveTable' => true,
    'template'=>'{summary}{items}{pager}',
    'enablePagination' => true,

    'columns'=>array(

    array(
           'name'=>'idPago',
           'value' => 'CHtml::link($data->idPago, Yii::app()->createUrl("admin/pagos/update",array("id"=>$data->primaryKey)))',
           'header' => 'Id Pago',
           'headerHtmlOptions'=>array('width'=>'100px'),
           'type'=>'raw'
        ),

    array(
        'name'=>'nombre',
          ),

    array(
        'name'=>'email',
           ),

   array(
        'name'=>'Fecha',
        'filter'=>'',
        'type'=>'html', 
        'value'=>'($data->fecha=="")?"Error":Yii::app()->dateFormatter->format("dd/MM/yyyy", $data->fecha)',
        'headerHtmlOptions'=>array('height'=>'10px'),
     ),  
     
   	'titulo',
   	'precio',
   	'txn_id',
   	'paymentstatus',
   	
 array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/pagos/update?id=$data->idPago" )', // url de la acción 'update'
    )
    ),
    )
    );

?>

</div><!-- /.box-header -->
</div>  
</div>


