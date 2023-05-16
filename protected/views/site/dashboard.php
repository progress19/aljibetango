<!DOCTYPE html>
<html lang="es">
<head>
   
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta property="fb:app_id" content="686920658044983xxx"/>
<meta property='og:locale' content='es_ES'/>
<meta property="og:title" content="<?php echo $this->face_titulo ?>"/>
<meta property='og:description' content='Kintun Expediciones'/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="<?php echo $this->face_link ?>"/>
<meta property="og:image" content="<?php echo $this->face_imagen ?>" />

<meta property="og:site_name" content="kintun"/>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" />

<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilosc.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/flexslider.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/preview.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.css" media="screen" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>

<link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/images/sol_chico2.png">

<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body class="skin-blue">
      
<!-- ******HEADER****** --> 
<header class="header">
  <!-- <div class="linea-header-a"></div>  -->
  <div class="linea-header-b">
    <div class="col-xs-12 col-sm-3 col-md-6" style="font-size: 15px; letter-spacing: 3px;">      
        <div class="header-texto">kintun.com | Turismo Aventura | San Rafael - Mendoza - Argentina</div>
    </div>
    
    <div class="col-xs-12 col-sm-9 col-md-6" style="text-align:right">

      <div id="mensajeS"></div>
      <form class="form-inline" id="frmSuscribir">
        <div class="form-group">
          <label for="email" class="col-sm-8 col-md-7 control-label" style="text-align: right; padding: 0px; font-weight: 600;">Suscribite a nuestras ofertas y promociones </label>

          <div class="col-sm-3 col-md-4" style="margin-top: -7px;"> 
            <input type="email" class="form-control input-sm" name="email" id="SusEmail" placeholder="Ingrese su email">
            <input type="hidden" class="form-control" name="url" id="SusURLRAIZ" value="<?php echo URLRAIZ ?>">
          </div>

          <div class="col-sm-1 col-md-1 nopadding" style="text-align: left;">
            <button type="submit" class="btn btn-sample btn-xs" title="enviar"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </div>
      </form>
    </div>

  </div><!--// linea-header-b-->
  <div class="clearfix"></div>

<div class="container-fluid header" style="padding-bottom: 5px; background: linear-gradient(#001035,#083A79);">
    
    <div class="container">
    <div class="row">
       <div class="col-xs-12 col-sm-6 col-md-3 logo" style="padding: 15px; position: initial;">
        <a href="<?php echo URLRAIZ ?>/home">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" class="img-responsive img-cen" alt="imagen"></a>
      </div>
    
      <div class="col-xs-6 col-sm-12 col-md-9 vivi" style="margin-top: 1.5%; ">Viví tus Vacaciones!!!</div>
      </div>
    </div> 

</div><!-- //container-fluid header -->

<!--// linea-header-c-->

<div class="linea-header-c">
  <nav class="navbar navbar-default" style="text-align:right">

    <div class="navbar-header" style="text-align:center">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
      data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse" style="text-align: center;">
      <ul class="nav navbar-nav" style = "float: none; vertical-align: top; display: inline-block;">

        <li class="<?php echo $this->bot_home ?>">
          <a href="<?php echo URLRAIZ ?>/site/home"><span class="glyphicon glyphicon-home"></span> HOME</a>
        </li>

        <?php $actividades = Actividades::model()->findAllByAttributes(array('estado'=>1),array('order'=>'nombre ASC')); ?> 

       <li class="dropdown <?php echo $this->bot_actividades ?>">
        <a href="<?php echo URLRAIZ ?>/site/actividad" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-briefcase"></span> ACTIVIDADES <i class="icon-angle-down"></i></a>
          <ul style="display: none;" class="dropdown-menu">
          <?php
              foreach ($actividades as $key => $actividad) {
                $url=urls_amigables($actividad->nombre);
               echo '<li><a href="'. URLRAIZ.'/site/actividad/'.$url.'/'.$actividad->idActividad.'"><img src='.URLRAIZ.'/pics/actividades/'.$actividad->icono.' alt="" style="height: 26px; margin-top: -5px;"> <span style="padding-left:4px"> '.$actividad->nombre.' </span></a></li>';
               }
           ?> 
          </ul>
      </li> 

        <li class="<?php echo $this->bot_ofertas ?>">
          <a href="<?php echo URLRAIZ ?>/site/promociones"><span class="glyphicon glyphicon-gift" ></span> PROMOCIONES</a>
        </li>
      
        <li class="<?php echo $this->bot_tarifas ?>">
          <a href="<?php echo URLRAIZ ?>/site/tarifas"><span class="glyphicon glyphicon-usd"></span> TARIFAS</a>
        </li>

        <li class="<?php echo $this->bot_grupos ?>">
          <a href="<?php echo URLRAIZ ?>/site/grupos"><span class="glyphicon glyphicon-user"></span> GRUPOS</a>
        </li>
       
        <li class="<?php echo $this->bot_historia ?>">
          <a href="<?php echo URLRAIZ ?>/site/historia"><span class="glyphicon glyphicon-info-sign"></span> HISTORIA</a>
        </li>
        
        <li class="<?php echo $this->bot_contacto ?>">
           <a href="<?php echo URLRAIZ ?>/site/contacto"><span class="glyphicon glyphicon-envelope"> </span> CONTACTO </a>
        </li>
      
      </ul>
    </div>
  </nav>
</div>

<!--// linea-header-c-->

</header>

<!-- Main content -->
<section style="overflow: visible;" class="content">
<?php echo $content; ?>
</section>
<!-- /.content -->

<!-- ========== FOOTER ========== -->
<div class="linea-header-a">
  
</div> 
<div class="linea-footer-b">
  <div class="container-fluid">
    <div class="col-md-12" id="new-footerA" >
        <div class="col-xs-6 col-sm-12 col-md-12 vivi" style="text-align:center">Viví tus Vacaciones!!!</div>
    </div>
  </div>  
</div> <!-- linea-footer-b -->

<div id="footer" style="background: linear-gradient(#DBFFFF,#FFFFFF);" >
  <div class="container">
    <div class="col-xs-12 col-md-12">  

      <div class="col-xs-12 col-sm-12 col-md-3" id="new-footerA">
        <p class="promos-especiales-titulo" style="color: #219DD0;">LA EMPRESA</p>
        <div class="copyright">
          <a href="<?php echo URLRAIZ ?>/actividades">- Actividades</a> <br><div class="divide10"></div>
          <a href="<?php echo URLRAIZ ?>/ofertas">- Ofertas</a> <br> <div class="divide10"></div>
          <a href="<?php echo URLRAIZ ?>/tarifas">- Tarifas</a> <br /> <div class="divide10"></div>
          <a href="<?php echo URLRAIZ ?>/historia">- Historia</a> <div class="divide10"></div>
          <a href="<?php echo URLRAIZ ?>/contacto">- Contacto</a>
        </div>
      </div>

      <div class="col-sm-12 col-md-5" id="new-footer">
        <p class="promos-especiales-titulo" style="color: #219DD0;">CONTACTO</p>
        <div class="copyright" style="line-height: 25px;">
          Contactanos ahora!<br>
          <span class="glyphicon glyphicon-map-marker"></span> Ruta Provincial 173 Km 18 - San Rafael - Mendoza - Argentina <br>
          <span class="glyphicon glyphicon-phone-alt"></span> Teléfono : 260 405-7755 <br>
          <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:kintunexpediciones@gmail.com">kintunexpediciones@gmail.com</a>
          
        </div>       
      </div>

          <div class="col-sm-12 col-md-3 sello">
            <a href="<?php echo URLRAIZ ?>/home"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" class="img-responsive" style="margin: 0px auto;" ></a><br>
            <a href="http://www.facebook.com/kintun.expediciones" target="new"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook-icon.png"></a>
            <a href="https://www.instagram.com/kintunexpediciones/" target="new"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/instagram.png"></a>
            <br><br />
          </div>

          <div class="col-xs-1" id="data-fiscal">
          <div>
            <a href="http://qr.afip.gob.ar/?qr=XXXXXXXXXXXXXXXXXXXXX,," target="_F960AFIPInfo" target="new">
              <img style="position: absolute; width: 70%; top: 25px;" src="http://www.afip.gob.ar/images/f960/DATAWEB.jpg" class="img-responsive" border="0">
            </a>
          </div>
          </div>

        </div> <!-- 12 -->

      </div>
      <div class="divide20"></div>
    </div>

    <div class="back_to_top">
      <a href="#"><img src="<?php echo URLRAIZ.'/images/arrow-up-icon.png' ?>"></a>
    </div>

<!-- ///////////////////////////////////////////////////// -->

<div class="linea-header-a"></div>

<!-- ///////////////////////////////////////////////////// -->

<div id="linea-footer-d">
Todos los Derechos reservados por Kintun Expediciones - Desarrollado por <a href="http://www.itsoft-mza.tk" target="new">ItSoft</a></div>

<!-- ========== FIN FOOTER ========== -->

    <!-- jQuery 2.0.2 -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.js" type="text/javascript"></script>
    <!-- JS -->
       
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/forms.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.js"></script>
    <!--<script src="<?php //echo Yii::app()->request->baseUrl; ?>/js/jquery-validate.bootstrap-tooltip.js"></script>-->

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.lazyload.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.themepunch.showbizpro2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/wow.min.js"></script>
   </body>
  
</html>

<script>
 new WOW().init();
</script>

<script type="text/javascript"> $(function() {
$("img.lazy").lazyload({
    threshold : 200,
     effect : "fadeIn"
});
})
</script> 

