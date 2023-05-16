<?php
/* @var $this EncCorpoController */
/* @var $model EncCorpo */

$this->menu_encuestacorpolistado = $this->menu_encuestas = 'active';

$this->breadcrumbs=array(
	'Encuestas'=>array('admin'),
	'Corporativos',
);

$this->titulo = '<i class="fa fa-fw fa-bar-chart"></i> Encuesta Corporativos';

?>

<div class="col-md-8">
<div class="box box-success">
    <div class="box-header">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_encuesta',
		'fecha',
		'idcli',
		'cli',
			array(              
				'name' => 'opcion1',
            	'value' => getvalortexto($model->opcion1),
            	),
			array(              
				'name' => 'opcion2',
            	'value' => getvalortexto($model->opcion2),
            	),
			array(              
				'name' => 'opcion3',
            	'value' => getvalortexto($model->opcion3),
            	),
			array(              
				'name' => 'opcion4',
            	'value' => getvalortexto($model->opcion4),
            	),
			array(              
				'name' => 'opcion5',
            	'value' => getvalortexto($model->opcion5),
            	),
			array(              
				'name' => 'opcion6',
            	'value' => getvalortexto($model->opcion6),
            	),
			array(              
				'name' => 'opcion7',
            	'value' => getvalortexto($model->opcion7),
            	),

		'sugerencias',
		    array(              
          	  'label' => 'Recibir novedades',
            	'type' => 'raw',
            	'value' => $model->noticias==1 ? "SI" : "NO"
            	),
		'nombre',
		'email',
		 array(              
          	  'name' => 'estado',
            	'type' => 'raw',
            	'value' => $model->estado==1 ? "Activado" : "Desactivado"
            	),
	),
)); ?>



</div>
</div>
</div>


<?php 
        function getvalortexto($valor)
        {
                
        	switch ($valor) {
        			case '1': $texto = 'Malo';
        				break;
        			case '2': $texto = 'Regular';
        				break;
        			case '3': $texto = 'Bueno';
        				break;
					case '4': $texto = 'Muy Bueno';
        				break;
        			case '5': $texto = 'Excelente';
        				break;
             			        			        			        			        			
        		}	

            return $texto;
        }

 ?>