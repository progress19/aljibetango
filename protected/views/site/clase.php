<?php require 'menu_.php'; ?>

  <!-- shop -->
<section id="reservas-int" class="container shop-int"><br>

<div class="inner">
	
            <div style="padding-bottom: 40px;" class="col-xs-12 col-sm-12 col-md-12">
            <div style="background-color: #fff; overflow: auto; padding: 0;">

                <h3 class="titulo-show-nuevo fondo-titulo-show">

                <?php

                        switch (Yii::app()->getLanguage()) {
                            case "es": $titulo = $clase->titulo_es;$descripcion = $clase->des_es;
                                break;
                            case "en":
                                $titulo = $clase->titulo_en;
                                $descripcion = $clase->des_en;
                                if ($titulo=='') {$titulo = $clase->titulo_es;}
                                if ($descripcion=='') {$descripcion = $clase->des_es;}
                                break;
                            case "pt":
                                $titulo = $clase->titulo_pr;
                                $descripcion = $clase->des_pr;
                                if ($titulo=='') {$titulo = $clase->titulo_es;}
                                if ($descripcion=='') {$descripcion = $clase->des_es;}
                                break;
                            case "zh":
                                $titulo = $clase->titulo_zh;
                                $descripcion = $clase->des_zh;
                                if ($titulo=='') {$titulo = $clase->titulo_zh;}
                                if ($descripcion=='') {$descripcion = $clase->des_es;}
                                break;    
                        }

                       $url = urls_amigables($titulo);
                       echo $titulo;
                  ?>
                  
                 </h3>  

    <div class="col-xs-12 col-md-6 des-show fuente-show">
      <?php echo $descripcion ?>      
      <div class="divide15"></div>
      
      <?php if ($clase->duracion): ?>          
        <p><?php echo Yii::t('strings','DURACIÓN'); ?>: <?php echo $clase->duracion; ?> <?php echo Yii::t('strings','MIN'); ?>.</p> 
      <?php endif ?>

    </div>

            <div class="col-xs-12 col-md-6 no-padding">
                <div class="reserva-image">
                 <a href="<?php echo URLRAIZ.'/shopclases/'.$clase->idShow.'/'.$url; ?>">
                 <div class="cont-img">
                   <img src="<?php echo URLRAIZ.'/pics/clases/'.$clase->imagen ?>" style="margin: 0px auto; border:1px solid #000" alt="" class='img-responsive'>
                 <span style="margin-top: 0px ! important;" class="positive"></span>
                 </div>
                 </a>
                </div>

                <div class="fondo-titulo-show col-md-12" style="padding: 12px 0 15px 0;">
                  
                  <div class="col-md-7 precio">
                    <p><?php echo 'USD '.$clase->precio1; ?>.-</p>
                    <h4><?php echo Yii::t('strings', 'TARIFA POR PERSONA'); ?></h4>  
                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo URLRAIZ.'/shopclases/'.$clase->idShow.'/'.$url; ?>" class="boton-reservar"><?php echo Yii::t('strings', 'RESERVAR'); ?></a>
                  </div>

                </div>

            </div>    
                        
            </div>
            </div>
	
</div>


  </section>

  <!--<div class="spa" style="height:50px"></div>-->

  <!-- JS Files -->

    <!-- jQuery UI 1.11.2 -->
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.scrollTo.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    
