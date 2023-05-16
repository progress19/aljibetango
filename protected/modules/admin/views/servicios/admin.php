<?php

$this->menu_Cava = 'active';

$this->breadcrumbs=array(
	'Cava'=>array('admin'),
	'Administrador',
);

$this->titulo = '<i class="fa fa-fw fa-music"></i> Cava';

?>

<div class="col-md-12">
<div class="box box-success">
    <div class="box-header">
        <a class="btn btn-success" href="create" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo Show</a>
    
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
           'name'=>'titulo_es',
           'value' => 'CHtml::link($data->titulo_es, Yii::app()->createUrl("admin/Cava/update",array("id"=>$data->primaryKey)))',
           'header' => 'Título',
           'headerHtmlOptions'=>array('width'=>'400px'),
           'type'=>'raw'
        ),

    array(
        'name'=>'precio',
        'headerHtmlOptions'=>array('width'=>'100px'),
        ),

    array(
        'name'=>'disponibilidad',
        'headerHtmlOptions'=>array('width'=>'100px'),
        ),

    array(
        'name'=>'capacidad',
        'headerHtmlOptions'=>array('width'=>'100px'),
        ),

   array(
        'name'=>'Desde',
        'filter'=>'',
        'type'=>'html',                                        
        'value'=>'($data->todoslosdias=="on")?"Todos los días":Yii::app()->dateFormatter->format("dd/MM/yyyy", $data->fecha)',
        'headerHtmlOptions'=>array('height'=>'10px'),
     ),  

      array(
        'name'=>'Hasta',
        'filter'=>'',
        'type'=>'html',
        'value'=>'($data->hasta)?Yii::app()->dateFormatter->format("dd/MM/yyyy", $data->hasta):"--"',
        'headerHtmlOptions'=>array('height'=>'10px'),
     ),  

      array(
        'name'=>'soldout',
        'filter'=>'',
        'header' => 'SoldOut',
        'type'=>'raw',
        //'value' => '($data->soldout != "") ? "<a class=\"fa fa-fw fa-check\" href=$data->soldout target=\"_new\"></a>" : ""',
        'value' => '($data->soldout != "") ? "<i class=\"fa fa-fw fa-check\"></i>" : ""',
    ),

    array(
        'name'=>'adwords',
        'filter'=>'',
        'header' => 'AdWords',
        'type'=>'raw',
'value' => '($data->adwords != "") ? "<a class=\"fa fa-fw fa-external-link\" href=\"http://laventanaweb.com/site/shop/$data->idShow\" target=\"_new\"></a>" : ""',
    ),
     
   	array(
        'name'=>'imagen',
        'filter'=>'',
        'type'=>'html',
        'value'=>'(!empty($data->imagen))?CHtml::image(Yii::app()->baseUrl."/pics/Cava/".$data->imagen,"",array("style"=>"height:50px")):"no imagen"',
     	'headerHtmlOptions'=>array('height'=>'10px'),
     ),

     array(  
        'class' => 'booster.widgets.TbToggleColumn',
        'name' => 'estado',
        'header' => 'Estado',
        'filter'=>array('1'=>'Activado','0'=>'Desactivado'),
        ),

 array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/Cava/update?id=$data->idShow" )', // url de la acción 'update'
    )),));

?>

</div><!-- /.box-header -->
</div>  
</div>


