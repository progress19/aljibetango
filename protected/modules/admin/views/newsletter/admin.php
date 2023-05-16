<?php
/* @var $this BarcosController */
/* @var $model Barcos */

$this->menu_suscripciones = 'active';

$this->breadcrumbs=array(
	'Suscripciones'=>array('admin'),
	'Administrador',
);

$this->titulo='<i class="fa fa-fw fa-envelope-o"></i> Suscripciones';

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbldestinos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?> 
<?php $this->beginWidget(
    'booster.widgets.TbModal',
    array('id' => 'myModal')
    ); ?>

    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Suscripciones</h4>
    </div>

    <div class="modal-body">
        <p>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$model->search(),
                'template'=>'{items} {pager}',
                'itemView'=>'_view',
                'enablePagination'=>false,
                )); ?>
            </p>
    </div>

    <div class="modal-footer">
        <?php $this->widget(
            'booster.widgets.TbButton',
            array(
                'context' => 'success',
                'label' => 'Cerrar',
                'url' => '#',
                'htmlOptions' => array('data-dismiss' => 'modal'),
                )
                ); ?>
    </div>

<?php $this->endWidget(); ?>



<div class="col-md-6">

<div class="box box-success">
    <div class="box-header">
        <?php $this->widget(
    'booster.widgets.TbButton',
    array(
    'label' => 'Exportar',
    'icon' => 'glyphicon glyphicon-export',
    'context' => 'success',
    'htmlOptions' => array(
    'data-toggle' => 'modal',
    'data-target' => '#myModal',
    ),
    )
    );
    ?>

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
        'email',
    array(  
            'class' => 'booster.widgets.TbToggleColumn',
            'name' => 'estado',
            'header' => 'Estado',
            'filter'=>array('1'=>'Activado','0'=>'Desactivado'),
        ),
 array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    )
    ),
    )
    );

?>

</div><!-- /.box-header -->
</div>  


