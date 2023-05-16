<?php
//CARGO LAS CONFIGURACIONES DEL SISTEMA
$config_section="front";
require("admin/includes/configuraciones.inc.php");

sleep(3);

$enc_corporativo = new enc_corporativos();

$enc_corporativo->nuevaEncuestaCorpo($_REQUEST[agencia],$_REQUEST[opcion1],$_REQUEST[opcion2],$_REQUEST[opcion3],$_REQUEST[opcion4],$_REQUEST[opcion5],$_REQUEST[opcion6],$_REQUEST[opcion7],$_REQUEST[sugerencias],$_REQUEST[novedades],$_REQUEST[nombre],$_REQUEST[email],$_REQUEST[idcli],$_REQUEST[cli]); 

//PRIMER MAIL SUPERIOR

include(DIRINCLUDES."configuracionesMail.inc.php");

$titulo="Encuesta La Ventana - Corporativos";
$nombre=$_REQUEST[nombre];
$email=$_REQUEST[email];
$idcli=$_REQUEST[idcli];
$cli=$_REQUEST[cli];


if ($_REQUEST[opcion1]==5) {$v1_5="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion1]==4) {$v1_4="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion1]==3) {$v1_3="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion1]==2) {$v1_2="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion1]==1) {$v1_1="<img src='http://www.laventanaweb.com/img/tilde.png'>";}

if ($_REQUEST[opcion2]==5) {$v2_5="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion2]==4) {$v2_4="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion2]==3) {$v2_3="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion2]==2) {$v2_2="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion2]==1) {$v2_1="<img src='http://www.laventanaweb.com/img/tilde.png'>";}

if ($_REQUEST[opcion3]==5) {$v3_5="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion3]==4) {$v3_4="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion3]==3) {$v3_3="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion3]==2) {$v3_2="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion3]==1) {$v3_1="<img src='http://www.laventanaweb.com/img/tilde.png'>";}

if ($_REQUEST[opcion4]==5) {$v4_5="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion4]==4) {$v4_4="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion4]==3) {$v4_3="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion4]==2) {$v4_2="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion4]==1) {$v4_1="<img src='http://www.laventanaweb.com/img/tilde.png'>";}

if ($_REQUEST[opcion5]==5) {$v5_5="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion5]==4) {$v5_4="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion5]==3) {$v5_3="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion5]==2) {$v5_2="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion5]==1) {$v5_1="<img src='http://www.laventanaweb.com/img/tilde.png'>";}

if ($_REQUEST[opcion6]==5) {$v6_5="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion6]==4) {$v6_4="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion6]==3) {$v6_3="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion6]==2) {$v6_2="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion6]==1) {$v6_1="<img src='http://www.laventanaweb.com/img/tilde.png'>";}

if ($_REQUEST[opcion7]==5) {$v7_5="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion7]==4) {$v7_4="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion7]==3) {$v7_3="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion7]==2) {$v7_2="<img src='http://www.laventanaweb.com/img/tilde.png'>";}
if ($_REQUEST[opcion7]==1) {$v7_1="<img src='http://www.laventanaweb.com/img/tilde.png'>";}


$cuerpo='

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
       '.$v1_5.'
      </td>
      <td class="centrado">
        '.$v1_4.'
      </td>
      <td class="centrado">
        '.$v1_3.'
      </td>
      <td class="centrado">
    '.$v1_2.'
      </td>
      <td class="centrado">
     '.$v1_1.'
      </td>
    </tr>
    <tr>
      <td>2 - Profesionalismo del Personal de Reservas</td>
      <td class="centrado">
       '.$v2_5.'
      </td>
      <td class="centrado">
        '.$v2_4.'
      </td>
      <td class="centrado">
        '.$v2_3.'
      </td>
      <td class="centrado">
    '.$v2_2.'
      </td>
      <td class="centrado">
     '.$v2_1.'
      </td>
    </tr>
    <tr>
      <td>3 - Nuestras Visitas Comerciales</td>
            <td class="centrado">
       '.$v3_5.'
      </td>
      <td class="centrado">
        '.$v3_4.'
      </td>
      <td class="centrado">
        '.$v3_3.'
      </td>
      <td class="centrado">
    '.$v3_2.'
      </td>
      <td class="centrado">
     '.$v3_1.'
      </td>
    </tr>
    <tr>
      <td>4 - Variedad de salones para sus eventos</td>
            <td class="centrado">
       '.$v4_5.'
      </td>
      <td class="centrado">
        '.$v4_4.'
      </td>
      <td class="centrado">
        '.$v4_3.'
      </td>
      <td class="centrado">
    '.$v4_2.'
      </td>
      <td class="centrado">
     '.$v4_1.'
      </td>
    </tr>
    <tr>
      <td>5 - Habilidad para interpretar sus necesidades</td>
            <td class="centrado">
       '.$v5_5.'
      </td>
      <td class="centrado">
        '.$v5_4.'
      </td>
      <td class="centrado">
        '.$v5_3.'
      </td>
      <td class="centrado">
    '.$v5_2.'
      </td>
      <td class="centrado">
     '.$v5_1.'
      </td>
    </tr>
    <tr>
      <td>6 - Agilidad en las respuestas</td>
           <td class="centrado">
       '.$v6_5.'
      </td>
      <td class="centrado">
        '.$v6_4.'
      </td>
      <td class="centrado">
        '.$v6_3.'
      </td>
      <td class="centrado">
    '.$v6_2.'
      </td>
      <td class="centrado">
     '.$v6_1.'
      </td>
    </tr>

        <tr>
      <td>7 - Relación precio/calidad de los servicios</td>
           <td class="centrado">
       '.$v7_5.'
      </td>
      <td class="centrado">
        '.$v7_4.'
      </td>
      <td class="centrado">
        '.$v7_3.'
      </td>
      <td class="centrado">
    '.$v7_2.'
      </td>
      <td class="centrado">
     '.$v7_1.'
      </td>
    </tr>

    <tr>
      
      
    </tr>
  </tbody>
  </table>

';

include_once(DIRINCLUDES."plantillaMailEncuestas.inc.php");


$mail->Subject  =  $titulo;

$mc = new mailsConfiguraciones ( );
$emails=split(";",$mc->cargarEmailsContacto ( ));

while(list($key, $to) = each($emails)){
	$to=trim($to);
	if($to!=""){
		$mail->AddAddress($to);
	}

}

$mail->Body=$contenido;

// Activo condificacción utf-8
$mail->CharSet = 'UTF-8';

$mail->Send();

echo $mail->ErrorInfo;


?>


