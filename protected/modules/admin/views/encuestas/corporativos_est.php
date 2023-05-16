<?php
$this->menu_encuestacorpografico = $this->menu_encuestas = 'active';

$this->breadcrumbs=array(
  'Encuestas'=>array('admin'),
  'Agencias',
);

$this->titulo = '<i class="fa fa-fw fa-bar-chart"></i> Encuesta Corporativos';

?>

<div class="col-md-12">
<div class="box box-success">
    <div class="box-header">

  <?php 

    /** @var TbActiveForm $form */
    $form = $this->beginWidget(
        'booster.widgets.TbActiveForm',
        array(
            'id' => 'verticalForm',
          
        )
    );

?>

<div class="col-md-2">
  <div class="form-group">
    Desde :
   <?php
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
         'language'=>'es',
         'name'=>'desde',
         'attribute'=>'dateString',
         'flat'=>false,
         'options'=>array(
            'changeMonth' => 'true',
            'changeYear'=>'true',
            'firstDay'=>1,
            'constrainInput'=>true,
            'currentText'=>'Now',
            'dateFormat'=>'dd-mm-yy',
            'buttonImageOnly'=> true,
            'onSelect'=> 'js:filtroEncuestaCorpo',
       ),
         'htmlOptions'=>array(
          'class'=>'form-control',
             ),
        ));

?>
  </div>
  </div>


  <div class="col-md-2">
  <div class="form-group">
    Hasta :
   <?php
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
         'language'=>'es',
         'name'=>'hasta',
         'attribute'=>'dateString',
         'flat'=>false,
         'options'=>array(
            'changeMonth' => 'true',
            'changeYear'=>'true',
            'firstDay'=>1,
            'constrainInput'=>true,
            'currentText'=>'Now',
            'dateFormat'=>'dd-mm-yy',
            'buttonImageOnly'=> true,
            'onSelect'=> 'js:filtroEncuestaCorpo',
       ),
         'htmlOptions'=>array(
          'class'=>'form-control',
             ),
        ));

?>
  </div>
  </div>
     
<?php 
     
    $this->endWidget();
    unset($form);

 ?>
<div class="clearfix"></div>
<hr>
  
<br>

<div id="divResultados">
  

</div>

    </div>
</div>
</div>