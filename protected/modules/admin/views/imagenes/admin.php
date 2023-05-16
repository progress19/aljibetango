<?php

$this->menu_imagenes = 'active';

$this->breadcrumbs=array(
	'Imágenes'=>array('admin'),
	'Administrador',
);

$this->titulo='<span class="glyphicon glyphicon-film"></span> Imágenes';

?>

<div class="col-md-6">
<div class="box box-success">
    <div class="box-header">
        <a class="btn btn-success" href="create" role="button"><span class="glyphicon glyphicon-plus"></span> Nueva Imágen</a>
    
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
        'name'=>'imagen',
        'filter'=>'',
        'type'=>'html',
        'value'=>'(!empty($data->imagen))?CHtml::image(Yii::app()->baseUrl."/pics/imagenes/".$data->imagen,"",array("style"=>"height:100px")):"no imagen"',
     	'headerHtmlOptions'=>array('height'=>'10px'),
     ),

    array(
        'name'=>'orden',
        'headerHtmlOptions'=>array('width'=>'70px'),
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
    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/imagenes/update?id=$data->idImagen" )', // url de la acción 'update'
    )
    ),
    )
    );

?>

</div><!-- /.box-header -->
</div>  
</div>


