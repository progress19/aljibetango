<?php 

$desde = $hasta = "";

if ($_REQUEST ['hasta']=="") {$_REQUEST ['hasta'] = '01-01-2099';}

$desde = Yii::app()->dateFormatter->format("yyyy-MM-dd", $_REQUEST ['desde']);
$hasta = Yii::app()->dateFormatter->format("yyyy-MM-dd", $_REQUEST ['hasta']);

$enc_agencia = EncCorpo::getEncuestasCorpo($desde,$hasta);

$v1_5=$v1_4=$v1_3=$v1_2=$v1_1=0;
$v2_5=$v2_4=$v2_3=$v2_2=$v2_1=0;
$v3_5=$v3_4=$v3_3=$v3_2=$v3_1=0;
$v4_5=$v4_4=$v4_3=$v4_2=$v4_1=0;
$v5_5=$v5_4=$v5_3=$v5_2=$v5_1=0;
$v6_5=$v6_4=$v6_3=$v6_2=$v6_1=0;
$v7_5=$v7_4=$v7_3=$v7_2=$v7_1=0;

$total=0;

foreach ($enc_agencia as $encuesta) {

  $total++;

  if ($encuesta->opcion1==5) {$v1_5++;}
  if ($encuesta->opcion1==4) {$v1_4++;}
  if ($encuesta->opcion1==3) {$v1_3++;}
  if ($encuesta->opcion1==2) {$v1_2++;}
  if ($encuesta->opcion1==1) {$v1_1++;}

  if ($encuesta->opcion2==5) {$v2_5++;}
  if ($encuesta->opcion2==4) {$v2_4++;}
  if ($encuesta->opcion2==3) {$v2_3++;}
  if ($encuesta->opcion2==2) {$v2_2++;}
  if ($encuesta->opcion2==1) {$v2_1++;}

  if ($encuesta->opcion3==5) {$v3_5++;}
  if ($encuesta->opcion3==4) {$v3_4++;}
  if ($encuesta->opcion3==3) {$v3_3++;}
  if ($encuesta->opcion3==2) {$v3_2++;}
  if ($encuesta->opcion3==1) {$v3_1++;}

  if ($encuesta->opcion4==5) {$v4_5++;}
  if ($encuesta->opcion4==4) {$v4_4++;}
  if ($encuesta->opcion4==3) {$v4_3++;}
  if ($encuesta->opcion4==2) {$v4_2++;}
  if ($encuesta->opcion4==1) {$v4_1++;}

  if ($encuesta->opcion5==5) {$v5_5++;}
  if ($encuesta->opcion5==4) {$v5_4++;}
  if ($encuesta->opcion5==3) {$v5_3++;}
  if ($encuesta->opcion5==2) {$v5_2++;}
  if ($encuesta->opcion5==1) {$v5_1++;}

  if ($encuesta->opcion6==5) {$v6_5++;}
  if ($encuesta->opcion6==4) {$v6_4++;}
  if ($encuesta->opcion6==3) {$v6_3++;}
  if ($encuesta->opcion6==2) {$v6_2++;}
  if ($encuesta->opcion6==1) {$v6_1++;}

  if ($encuesta->opcion7==5) {$v7_5++;}
  if ($encuesta->opcion7==4) {$v7_4++;}
  if ($encuesta->opcion7==3) {$v7_3++;}
  if ($encuesta->opcion7==2) {$v7_2++;}
  if ($encuesta->opcion7==1) {$v7_1++;}

}

echo '
<script type="text/javascript">
var v1_5='.$v1_5.';
var v1_4='.$v1_4.';
var v1_3='.$v1_3.';
var v1_2='.$v1_2.';
var v1_1='.$v1_1.';

var v2_5='.$v2_5.';
var v2_4='.$v2_4.';
var v2_3='.$v2_3.';
var v2_2='.$v2_2.';
var v2_1='.$v2_1.';

var v3_5='.$v3_5.';
var v3_4='.$v3_4.';
var v3_3='.$v3_3.';
var v3_2='.$v3_2.';
var v3_1='.$v3_1.';

var v4_5='.$v4_5.';
var v4_4='.$v4_4.';
var v4_3='.$v4_3.';
var v4_2='.$v4_2.';
var v4_1='.$v4_1.';

var v5_5='.$v5_5.';
var v5_4='.$v5_4.';
var v5_3='.$v5_3.';
var v5_2='.$v5_2.';
var v5_1='.$v5_1.';

var v6_5='.$v6_5.';
var v6_4='.$v6_4.';
var v6_3='.$v6_3.';
var v6_2='.$v6_2.';
var v6_1='.$v6_1.';

var v7_5='.$v7_5.';
var v7_4='.$v7_4.';
var v7_3='.$v7_3.';
var v7_2='.$v7_2.';
var v7_1='.$v7_1.';

</script>';
?>
  <div class="row">
    <div class="col-md-12">
 
              <div style="min-height: 460px;" class="content">
                <div class="pane">
                  <div class="long-title"><h3></h3></div>
                  <div id="chartContainer" class="case-container" style="width: 100%; height: 400px;"></div>
                  <div class="credits"></div>
                </div>
              </div>
    </div>
  </div>

<br>

  <div class="row">
    <div class="col-md-12">
      <span style="font-size:16px">Total Encuestas : <?php echo $total?></span></br>
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
        <?php echo $v1_5;?>
      </td>
      <td class="centrado">
       <?php echo $v1_4;?>
      </td>
      <td class="centrado">
       <?php echo $v1_3;?>
      </td>
      <td class="centrado">
       <?php echo $v1_2;?>
      </td>
      <td class="centrado">
        <?php echo $v1_1;?>
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
          <?php echo $v2_5;?> 
       </td>
      <td class="centrado">
          <?php echo $v2_4;?>
      </td>
      <td class="centrado">
        <?php echo $v2_3;?>
      </td>
      <td class="centrado">
        <?php echo $v2_2;?>
      </td>
      <td class="centrado">
        <?php echo $v2_1;?>
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
        <?php echo $v3_5;?>
      </td>
      <td class="centrado">
        <?php echo $v3_4;?>
      </td>
      <td class="centrado">
        <?php echo $v3_3;?>
      </td>
      <td class="centrado">
        <?php echo $v3_2;?>
      </td>
      <td class="centrado">
        <?php echo $v3_1;?>
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
        <?php echo $v4_5;?>
      </td>
      <td class="centrado">
        <?php echo $v4_4;?>
      </td>
      <td class="centrado">
        <?php echo $v4_3;?>
      </td>
      <td class="centrado">
        <?php echo $v4_2;?>
      </td>
      <td class="centrado">
        <?php echo $v4_1;?>
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
         <?php echo $v5_5;?>
      </td>
      <td class="centrado">
          <?php echo $v5_4;?>
      </td>
      <td class="centrado">
          <?php echo $v5_3;?>
      </td>
      <td class="centrado">
          <?php echo $v5_2;?>
      </td>
      <td class="centrado">
          <?php echo $v5_1;?>
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
        <?php echo $v6_5;?>
      </td>
      <td class="centrado">
        <?php echo $v6_4;?>
      </td>
      <td class="centrado">
        <?php echo $v6_3;?>
      </td>
      <td class="centrado">
        <?php echo $v6_2;?>
      </td>
      <td class="centrado">
         <?php echo $v6_1;?> 
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
         <?php echo $v7_5;?>
      </td>
      <td class="centrado">
         <?php echo $v7_4;?>
      </td>
      <td class="centrado">
         <?php echo $v7_3;?>
      </td>
      <td class="centrado">
         <?php echo $v7_2;?>
      </td>
      <td class="centrado">
         <?php echo $v7_1;?>
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

    </div>
  </div> <!-- fin row -->



<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/admin/Chart.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/admin/knockout-3.0.0.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/admin/globalize.min.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/admin/dx.chartjs.js" type="text/javascript"></script> 


<script>
  
var dataSource = [
    { state: "1", 1: v1_5, 2: v1_4, 3: v1_3, 4: v1_2, 5: v1_1 },
    { state: "2", 1: v2_5, 2: v2_4, 3: v2_3, 4: v2_2, 5: v2_1 },
    { state: "3", 1: v3_5, 2: v3_4, 3: v3_3, 4: v3_2, 5: v3_1 },
    { state: "4", 1: v4_5, 2: v4_4, 3: v4_3, 4: v4_2, 5: v4_1 },
    { state: "5", 1: v5_5, 2: v5_4, 3: v5_3, 4: v5_2, 5: v5_1 },
    { state: "6", 1: v6_5, 2: v6_4, 3: v6_3, 4: v6_2, 5: v6_1 },
    { state: "7", 1: v7_5, 2: v7_4, 3: v7_3, 4: v7_2, 5: v7_1 },
];

$("#chartContainer").dxChart({
    dataSource: dataSource,
    commonSeriesSettings: {
        argumentField: "state",
        type: "stackedBar"
    },
    series: [
        { valueField: "1", name: "Excelente" },
        { valueField: "2", name: "Muy Bueno" },
        { valueField: "3", name: "Bueno" },
        { valueField: "4", name: "Regular" },
        { valueField: "5", name: "Malo" }
    ],
    legend: {
        verticalAlignment: "bottom",
        horizontalAlignment: "center",
    itemTextPosition: 'top'
    },
    valueAxis: {
        title: {
            text: "votos"
        },
        position: "right"
    },
    title: "Estadísticas Encuestas - Corporativos",
    tooltip: {
        enabled: true,
        customizeText: function () {
            return this.seriesName + " : " + this.valueText + " votos " ;
        }
    }
});
  
  </script>