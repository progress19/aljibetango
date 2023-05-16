<?php
/* @var $this ondemandController */
/* @var $model On Demand */

$this->menu_ondemand = 'active';

$this->breadcrumbs=array(
	'On Demand'=>array('admin'),
	'Administrador',
);

$this->titulo = '<i class="fa fa-video-camera" aria-hidden="true"></i> On Demand';

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
           'name'=>'id',
           'value' => 'CHtml::link($data->id, Yii::app()->createUrl("admin/ondemand/view",array("id"=>$data->primaryKey)))',
           'header' => 'id',
           'type'=>'raw',
           'headerHtmlOptions'=>array('width'=>'50px'),
        ),

     array(
        'name'=>'fechaReg',
        'filter'=>'',
       // 'type'=>'html',    
        'value' => 'Yii::app()->dateFormatter->format("dd/MM/yyyy hh:mm", $data->fechaReg)',
        'headerHtmlOptions'=>array('width'=>'130px'),
        ), 

    array(
        'name' => 'paymentAmount',
        'value' => '$data->paymentAmount',
        'headerHtmlOptions'=>array('width'=>'100px'),
        ), 

    array(
        'name' => 'orderStatus',
        /*'headerHtmlOptions'=>array('width'=>'100px'),*/
        ), 

    array(
        'name' => 'orderId',
        /*'headerHtmlOptions'=>array('width'=>'100px'),*/
        ),

 array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'template'=> '{view} {delete}', 
    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/ondemand/view/$data->id" )', // url de la acción 'update'
    
    )),

   ));

?>

</div><!-- /.box-header -->
</div>  
</div>


