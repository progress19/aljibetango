<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.:: Encuesta Corporativos - La Ventana ::.</title>

    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilos.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div style="width:100%; text-align:center; background: #000;">
        <img src="images/header.jpg">
    </div>
       
<div class="container" style="padding-top: 1em;">

  <div class="col-md-12" id="est">
    Señores <?php echo $_REQUEST['cli'];?>, gracias por elegirnos. Para seguir mejorando nuestros servicios, le rogamos unos minutos de su tiempo para responder esta evaluación y darnos 
    su opinión sobre los siguientes puntos:
  </div>
  <input type="hidden" value='<?php echo $_REQUEST['idcli'];?>'>
</br></br></br>
    
    <div id="mensaje" style="height:350px; padding-top:40px; text-align:center">&nbsp;</div>
    <form id="frmCorporativos" class="form-horizontal">
  <input type="hidden" name='cli' id='cli' value='<?php echo $_REQUEST['cli'];?>'>
  <input type="hidden" name='idcli' id='idcli' value='<?php echo $_REQUEST['idcli'];?>'>

  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th class="centrado">Calificación</th>
      <th class="centrado">5</th>
      <th class="centrado">4</th>
      <th class="centrado">3</th>
      <th class="centrado">2</th>
      <th class="centrado">1</th>
      <!--<td rowspan="2" class="centrado">Sus Comentarios</td>-->
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="centrado">Aspectos</td>
      <td class="centrado">Excelente</td>
      <td class="centrado">Muy Bueno</td>
      <td class="centrado">Bueno</td>
      <td class="centrado">Regular</td>
      <td class="centrado">Malo</td>
      <!--<td class="centrado"></td>-->
    </tr>
    <tr>
      <td>1 - Nuestros Servicios</td>
      <td class="centrado">
        <label>
          <input class="5" type="radio" rel="tooltip" title="Excelente" name="opcion1" value="5" id="opcion1" checked /> 
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="4" type="radio" rel="tooltip" title="Muy Bueno" name="opcion1" value="4" id="opcion1" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="3" type="radio" rel="tooltip" title="Bueno" name="opcion1" value="3" id="opcion1" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="2" type="radio" rel="tooltip" title="Regular" name="opcion1" value="2" id="opcion1" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="1" type="radio" rel="tooltip" title="Malo" name="opcion1" value="1" id="opcion1" />
        </label>
      </td>
      <!--<td>
        <div class="input-group" style="width:100%">
         <input type="text" class="form-control" >
        </div>
      </td>-->
    </tr>
    <tr>
      <td>2 - Profesionalismo del Personal de Reservas</td>
       <td class="centrado">
        <label>
            <input class="5" type="radio" rel="tooltip" title="Excelente" name="opcion2" value="5" id="opcion2" checked /> 
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="4" type="radio" rel="tooltip" title="Muy Bueno" name="opcion2" value="4" id="opcion2" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="3" type="radio" rel="tooltip" title="Bueno" name="opcion2" value="3" id="opcion2" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="2" type="radio" rel="tooltip" title="Regular" name="opcion2" value="2" id="opcion2" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="1" type="radio" rel="tooltip" title="Malo" name="opcion2" value="1" id="opcion2" />
        </label>
      </td>
      <!--<td>
        <div class="input-group" style="width:100%">
         <input type="text" class="form-control" >
        </div>
      </td>-->
    </tr>
    <tr>
      <td>3 - Nuestras Visitas Comerciales</td>
       <td class="centrado">
        <label> 
            <input class="5" type="radio" rel="tooltip" title="Excelente" name="opcion3" value="5" id="opcion3" checked /> 
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="4" type="radio" rel="tooltip" title="Muy Bueno" name="opcion3" value="4" id="opcion3" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="3" type="radio" rel="tooltip" title="Bueno" name="opcion3" value="3" id="opcion3" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="2" type="radio" rel="tooltip" title="Regular" name="opcion3" value="2" id="opcion3" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="1" type="radio" rel="tooltip" title="Malo" name="opcion3" value="1" id="opcion3" />
        </label>
      </td>
      <!--<td>
        <div class="input-group" style="width:100%">
         <input type="text" class="form-control" >
        </div>
      </td>-->
    </tr>
    <tr>
      <td>4 - Variedad de salones para sus eventos</td>
        <td class="centrado">
        <label>
            <input class="5" type="radio" rel="tooltip" title="Excelente" name="opcion4" value="5" id="opcion4" checked /> 
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="4" type="radio" rel="tooltip" title="Muy Bueno" name="opcion4" value="4" id="opcion4" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="3" type="radio" rel="tooltip" title="Bueno" name="opcion4" value="3" id="opcion4" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="2" type="radio" rel="tooltip" title="Regular" name="opcion4" value="2" id="opcion4" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="1" type="radio" rel="tooltip" title="Malo" name="opcion4" value="1" id="opcion4" />
        </label>
      </td>
      <!--<td>
        <div class="input-group" style="width:100%">
         <input type="text" class="form-control" >
        </div>
      </td>-->
    </tr>
    <tr>
      <td>5 - Habilidad para interpretar sus necesidades</td>
       <td class="centrado">
        <label>
            <input class="5" type="radio" rel="tooltip" title="Excelente" name="opcion5" value="5" id="opcion5" checked /> 
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="4" type="radio" rel="tooltip" title="Muy Bueno" name="opcion5" value="4" id="opcion5" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="3" type="radio" rel="tooltip" title="Bueno" name="opcion5" value="3" id="opcion5" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="2" type="radio" rel="tooltip" title="Regular" name="opcion5" value="2" id="opcion5" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="1" type="radio" rel="tooltip" title="Malo" name="opcion5" value="1" id="opcion5" />
        </label>
      </td>
      <!--<td>
        <div class="input-group" style="width:100%">
         <input type="text" class="form-control" >
        </div>
      </td>-->
    </tr>
    <tr>
      <td>6 - Agilidad en las respuestas</td>
      <td class="centrado">
        <label>
            <input class="5" type="radio" rel="tooltip" title="Excelente" name="opcion6" value="5" id="opcion6" checked /> 
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="4" type="radio" rel="tooltip" title="Muy Bueno" name="opcion6" value="4" id="opcion6" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="3" type="radio" rel="tooltip" title="Bueno" name="opcion6" value="3" id="opcion6" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="2" type="radio" rel="tooltip" title="Regular" name="opcion6" value="2" id="opcion6" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="1" type="radio" rel="tooltip" title="Malo" name="opcion6" value="1" id="opcion6" />
        </label>
      </td>
      <!--<td>
        <div class="input-group" style="width:100%">
         <input type="text" class="form-control" >
        </div>
      </td>-->
    </tr>

        <tr>
      <td>7 - Relación precio/calidad de los servicios</td>
      <td class="centrado">
        <label>
            <input class="5" type="radio" rel="tooltip" title="Excelente" name="opcion7" value="5" id="opcion7" checked /> 
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="4" type="radio" rel="tooltip" title="Muy Bueno" name="opcion7" value="4" id="opcion7" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="3" type="radio" rel="tooltip" title="Bueno" name="opcion7" value="3" id="opcion7" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="2" type="radio" rel="tooltip" title="Regular" name="opcion7" value="2" id="opcion7" />
        </label>
      </td>
      <td class="centrado">
        <label>
            <input class="1" type="radio" rel="tooltip" title="Malo" name="opcion7" value="1" id="opcion7" />
        </label>
      </td>
      <!--<td>
        <div class="input-group" style="width:100%">
         <input type="text" class="form-control" >
        </div>
      </td>-->
    </tr>

    <tr>
      
      
    </tr>
  </tbody>
  </table>

  <div class="col-md-12 fondoNegro">SUGERENCIAS</div>
  <label class="control-label pay" for="ContactSugerencias"></label>
  <textarea class="form-control" rows="3" id="ContactSugerencias" name="sugerencias" placeholder="Escriba aquí su sugerencia..."></textarea>
  
  <br>
  <div class="col-md-4">
        <label class="control-label pay" for="ContactNovedades">Desea recibir novedades ?</label>
    
        <input type="radio" id="ContactNovedades" name="novedades" value="1" checked> Si
        <input type="radio" id="ContactNovedades" name="novedades" value="2"> No
    
  </div>

  <!-- -->

  <div class="col-md-4 form-horizontal">
    
    <div class="form-group">
      <label for="nombre" class="col-md-5 control-label" for="ContactNombre">Nombre</label>
      <div class="col-md-7">
        <input type="text" class="form-control" id="ContactNombre" name="nombre" placeholder="">
      </div>

    </div>  

    <div class="clear"></div>
    
    <div class="form-group">
      <label for="ejemplo_email_3" class="col-md-5 control-label" for="ContactEmail">Email</label>
      <div class="col-md-7">
        <input type="email" class="form-control" id="ContactEmail" name="email" placeholder="">
      </div>

    </div>
  
  </div>

<input type="hidden" class="form-control" name="url" id="URLRAIZ" value="<?php echo URLRAIZ  ?>">

  <div class="col-md-4 form-horizontal">
    <div class="form-group">
      
      <div class="col-md-1 col-md-offset-4">
        <button type="submit" class="btn btn-default btn-lg">E N V I A R</button>
      </div>

    </div>
  </div>

<div class="clearfix"></div>
<br>
</form>
</div>
 
       <div class="container well">
       </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/forms.js"></script>

        <script>
            $(function () {
                $('.1').tooltip({ placement: 'left'});
                $('.2').tooltip({ placement: 'left'});
                $('.3').tooltip({ placement: 'left'});
                $('.4').tooltip({ placement: 'left'});
                $('.5').tooltip({ placement: 'left'});
           });
        </script>

    </body>
    </html>