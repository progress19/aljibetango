<?php
/* @var $this VentasController */
/* @var $model Ventas */

$this->menu_ventas = 'active';

$this->breadcrumbs=array(
	'Ventas'=>array('admin'),
	'Administrador',
);

$this->titulo = '<i class="fa fa-fw fa-shopping-cart"></i> Ventas';

?>

<div class="col-md-12">
<div class="box box-success">
    <div class="box-header">
          
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
        'name' => 'idVenta',
        'headerHtmlOptions'=>array('width'=>'100px'),
        ),

     array(
        'name'=>'fecha',
        'filter'=>'',
        'type'=>'html',    
        'value' => 'CHtml::link(Yii::app()->dateFormatter->format("dd/MM/yyyy", $data->fecha), Yii::app()->createUrl("admin/ventas/view",array("id"=>$data->primaryKey)))',
        'headerHtmlOptions'=>array('width'=>'100px'),
     ), 

    array('name'=>'show_nombre', 
           //'value'=>'$data->show==null ? "" : $data->show->titulo_es',
           'value' => '$data->getNombreShow($data->idShow)',
           'header'=>'Show',
           'headerHtmlOptions'=>array('width'=>'270px'),
            ),

    array(
        'name'=>'fechaShow',
        'filter'=>'',
        'type'=>'html',    
        'value' => 'CHtml::link(Yii::app()->dateFormatter->format("dd/MM/yyyy", $data->fechaShow), Yii::app()->createUrl("admin/ventas/view",array("id"=>$data->primaryKey)))',
        'header'=>'Fecha del Show',
    ), 

    'cantidad',

    array('name'=>'usuario_nombre', 
           //'value'=>'$data->cliente->apellido',
           'value'=>'$data->cliente==null ? "" : $data->cliente->apellido',
           'header'=>'Cliente',
            ),
    'txn_id',
    'paymentstatus',

 array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'template'=> '{view} {delete}', 
    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/ventas/view/$data->idVenta" )', // url de la acción 'update'
    
    )
    ),
    )
    );

?>

</div><!-- /.box-header -->
</div>  
</div>


