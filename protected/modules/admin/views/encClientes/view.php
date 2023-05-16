<?php

$this->menu_encuestaagencialistado = $this->menu_encuestas = 'active';

$this->breadcrumbs=array(
	'Encuestas'=>array('admin'),
	'Clientes',
);

$this->titulo = '<i class="fa fa-fw fa-bar-chart"></i> Encuesta Clientes';

?>

<div class="col-md-12">
<div class="box box-success">
    <div class="box-header">

<div class="col-md-5">

	<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'id',
		'nombre',
		'email',
		array(              
        'name' => 'País',
        'type' => 'raw',
        'value' => Paises::getPaisNombre($model->idPais),
       ),
		array(              
        'name' => 'estado',
        'type' => 'raw',
        'value' => $model->estado==1 ? "Activado" : "Desactivado"
       ),
		'comentarios',
	),

	)); ?>
	
</div>

<div class="col-md-7">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
			
		array(              
			'name' => 'opcion1',
        	'value' => getvalortexto($model->opcion1),
        	'type'=>'html',
        ),

		array(              
			'name' => 'opcion2',
        	'value' => getvalortexto($model->opcion2),
        	'type'=>'html',
        ),

		array(              
			'name' => 'opcion3',
        	'value' => getvalortexto($model->opcion3),
        	'type'=>'html',
        ),

        array(              
			'name' => 'opcion4',
        	'value' => getvalortexto($model->opcion4),
        	'type'=>'html',
        ),

        array(              
			'name' => 'opcion5',
        	'value' => getvalortexto($model->opcion5),
        	'type'=>'html', 
        ),

        array(              
			'name' => 'opcion6',
        	'value' => getvalortexto($model->opcion6),
        	'type'=>'html',
        ),

        array(              
			'name' => 'opcion7',
        	'value' => getvalortexto($model->opcion7),
        	'type'=>'html',
        ),

        array(              
			'name' => 'opcion8',
        	'value' => getvalortexto($model->opcion8),
        	'type'=>'html',
        ),

        array(              
			'name' => 'opcion9',
        	'value' => getvalortexto($model->opcion9),
        	'type'=>'html',
        ),

        array(              
			'name' => 'opcion10',
        	'value' => getvalortexto($model->opcion10),
        	'type'=>'html',
        ),
		
	),

)); ?>
	
</div>


</div>
</div>
</div>


<?php 
    function getvalortexto($valor) {

    	$stars = '';

    	switch ($valor) {
   			case '1': $stars = "<img style='width:25px' src='".URLRAIZ."/images/star_y.png' />";
   				break;
   			case '2': $stars = "<img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' />";
   				break;
   			case '3': $stars = "<img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' />";
   				break;
			case '4': $stars = "<img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' />";
   				break;
   			case '5': $stars = "<img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' /><img style='width:25px' src='".URLRAIZ."/images/star_y.png' />";
    				break;
    		}	

        return $stars;
    }

 ?>


