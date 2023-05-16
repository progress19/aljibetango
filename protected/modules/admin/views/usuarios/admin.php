<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->menu_clientes = 'active';

$this->breadcrumbs=array(
	'Clientes'=>array('admin'),
	'Administrador',
);

$this->titulo = '<i class="fa fa-fw fa-users"></i> Clientes';

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
        'name' => 'idUsuario',
        'headerHtmlOptions'=>array('width'=>'100px'),
        ),

     array(
        'name'=>'nombre',
        'type'=>'html',    
        'value' => 'CHtml::link($data->nombre, Yii::app()->createUrl("admin/usuarios/update",array("id"=>$data->primaryKey)))',
       // 'headerHtmlOptions'=>array('width'=>'100px'),
     ), 

     array(
        'name'=>'apellido',
        'type'=>'html',    
        'value' => 'CHtml::link($data->apellido, Yii::app()->createUrl("admin/usuarios/update",array("id"=>$data->primaryKey)))',
        //'headerHtmlOptions'=>array('width'=>'100px'),
     ), 

     'email',
     'telefono',
     'ciudad',

     array(
        'name'=>'pais_nombre',
        'type'=>'html',   
        'value'=>'$data->pais==null ? "" : $data->pais->nombre',
        //'headerHtmlOptions'=>array('width'=>'100px'),
     ), 
    

 array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/usuarios/update?id=$data->idUsuario" )', // url de la acción 'update'
    )
    ),
    )
    );

?>

</div><!-- /.box-header -->
</div>  
</div>


