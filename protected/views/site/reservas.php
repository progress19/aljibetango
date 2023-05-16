<!-- Page Loader -->
  
 <!-- 
  <section id="pageloader">
    <div class="logo-loading">
      <img src="<?php //echo URLRAIZ ?>/images/logo.png" class="" width="" alt="" >
    </div>  
    <div class="loader"></div>
  </section>
-->

<?php require 'menu_.php';  ?>

  <!-- reservas -->
  <section id="reservas-int" class="container">
   <div class="inner" style="padding: 10px 0px 80px;">

        <h3 class="titulo"><?php echo Yii::t('strings', 'HAGA SU RESERVA HOY Y DISFRUTE DEL SHOW DE TANGO MAS EXCLUSIVO DEL MUNDO'); ?></h3>
        <br>

        <!-- PROMOS -->

        <?php foreach ($shows_promos as $show) : ?>

            <div style="padding-bottom: 40px;" class="col-xs-12 col-sm-12 col-md-12">
            <div style="background-color: #fff; overflow: auto; padding: 0;">

                <h3 class="titulo-show-nuevo fondo-titulo-show">

                <?php

                        switch (Yii::app()->getLanguage()) {
                            case "es": $titulo = $show->titulo_es;$descripcion = $show->des_es;
                                break;
                            case "en":
                                $titulo = $show->titulo_en;
                                $descripcion = $show->des_en;
                                if ($titulo=='') {$titulo = $show->titulo_es;}
                                if ($descripcion=='') {$descripcion = $show->des_es;}
                                break;
                            case "pt":
                                $titulo = $show->titulo_pr;
                                $descripcion = $show->des_pr;
                                if ($titulo=='') {$titulo = $show->titulo_es;}
                                if ($descripcion=='') {$descripcion = $show->des_es;}
                                break;
                            case "zh":
                                $titulo = $show->titulo_zh;
                                $descripcion = $show->des_zh;
                                if ($titulo=='') {$titulo = $show->titulo_zh;}
                                if ($descripcion=='') {$descripcion = $show->des_es;}
                                break;    
                        }
                         $url = urls_amigables($titulo);
                       echo $titulo;
                  ?>
                  
                 </h3>  

    <div class="col-xs-12 col-md-6 des-show fuente-show">
      <?php echo $descripcion ?>      
        <div class="divide15"></div>
        
      <?php if ($show->hora_cena): ?>
        <p><?php echo Yii::t('strings','CENA'); ?>: <?php echo $show->hora_cena; ?> <?php echo Yii::t('strings','HS'); ?>.</p>
      <?php endif ?>

      <?php if ($show->hora_show): ?>
        <p><?php echo Yii::t('strings','SHOW'); ?>: <?php echo $show->hora_show; ?> <?php echo Yii::t('strings','HS'); ?>.</p>
      <?php endif ?>

      <?php if ($show->duracion): ?>
        <p><?php echo Yii::t('strings','DURACIÓN'); ?>: <?php echo $show->duracion; ?> <?php echo Yii::t('strings','MIN'); ?>.</p> 
      <?php endif ?>

    </div>

            <div class="col-xs-12 col-md-6 no-padding">
                <div class="reserva-image">

                 <a href="<?php echo URLRAIZ.'/shop/'.$show->idShow.'/'.$url; ?>">
                 <div class="cont-img">
                   <img src="<?php echo URLRAIZ.'/pics/shows/'.$show->imagen ?>" style="margin: 0px auto; border:1px solid #000" alt="" class='img-responsive'>
                 <span style="margin-top: 0px !important;" class="positive"></span>
                 </div>
                 </a>
                </div>

                <div class="fondo-titulo-show col-md-12" style="padding: 12px 0 15px 0;">
                  <div class="col-md-7 precio">
                    <p><?php echo 'USD '.$show->precio; ?>.-</p> 
                    <h4><?php echo Yii::t('strings', 'TARIFA POR PERSONA'); ?></h4>
                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo URLRAIZ.'/shop/'.$show->idShow.'/'.$url; ?>" class="boton-reservar"><?php echo Yii::t('strings', 'RESERVAR'); ?></a>
                  </div>

                <?php if ($show->soldout=='on'): ?>
                  <div class="soldout-opaco-precio">.</div>              
                <?php endif ?>

                </div>

            </div>    
            <?php if ($show->soldout=='on'): ?>
              <div class="soldout-image">.</div>          
            <?php endif ?>
                        
            </div>
            </div>

        <?php endforeach ?>

        <div class="clearfix"></div>

        <!-- SHOWS TODOS LOS DIAS -->

        <?php foreach ($shows as $show) : ?>

            <div style="padding-bottom: 40px;" class="col-xs-12 col-sm-12 col-md-12">
            <div style="background-color: #fff; overflow: auto; padding: 0;">

                <h3 class="titulo-show-nuevo fondo-titulo-show">

                <?php

                        switch (Yii::app()->getLanguage()) {
                            case "es": $titulo = $show->titulo_es;$descripcion = $show->des_es;
                                break;
                            case "en":
                                $titulo = $show->titulo_en;
                                $descripcion = $show->des_en;
                                if ($titulo=='') {$titulo = $show->titulo_es;}
                                if ($descripcion=='') {$descripcion = $show->des_es;}
                                break;
                            case "pt":
                                $titulo = $show->titulo_pr;
                                $descripcion = $show->des_pr;
                                if ($titulo=='') {$titulo = $show->titulo_es;}
                                if ($descripcion=='') {$descripcion = $show->des_es;}
                                break;
                            case "zh":
                                $titulo = $show->titulo_zh;
                                $descripcion = $show->des_zh;
                                if ($titulo=='') {$titulo = $show->titulo_zh;}
                                if ($descripcion=='') {$descripcion = $show->des_es;}
                                break;

                        }
                         $url = urls_amigables($titulo);
                       echo $titulo;
                  ?>
                  
                 </h3>  

    <div class="col-xs-12 col-md-6 des-show fuente-show">
      <?php echo $descripcion ?>     
        <div class="divide15"></div>
        
        <?php if ($show->hora_cena): ?>
          <p><?php echo Yii::t('strings','CENA'); ?>: <?php echo $show->hora_cena; ?> <?php echo Yii::t('strings','HS'); ?>.</p>
        <?php endif ?>
        
        <?php if ($show->hora_show): ?>
          <p><?php echo Yii::t('strings','SHOW'); ?>: <?php echo $show->hora_show; ?> <?php echo Yii::t('strings','HS'); ?>.</p>
        <?php endif ?>

        <?php if ($show->duracion): ?>
          <p><?php echo Yii::t('strings','DURACIÓN'); ?>: <?php echo $show->duracion; ?> <?php echo Yii::t('strings','MIN'); ?>.</p> 
        <?php endif ?>

    </div>

            <div class="col-xs-12 col-md-6 no-padding">
                <div class="reserva-image">
                 <a href="<?php echo URLRAIZ.'/shop/'.$show->idShow.'/'.$url; ?>">
                 <div class="cont-img">
                   <img src="<?php echo URLRAIZ.'/pics/shows/'.$show->imagen ?>" style="margin: 0px auto; border:1px solid #000" alt="" class='img-responsive'>
                 <span style="margin-top: 0px ! important;" class="positive"></span>
                 </div>
                 </a>
                </div>

                <div class="fondo-titulo-show col-md-12" style="padding: 12px 0 15px 0;">
                  <div class="col-md-7 precio">
                    <p><?php echo 'USD '.$show->precio; ?>.-</p> 
                    <h4><?php echo Yii::t('strings', 'TARIFA POR PERSONA'); ?></h4> 
                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo URLRAIZ.'/shop/'.$show->idShow.'/'.$url; ?>" class="boton-reservar"><?php echo Yii::t('strings', 'RESERVAR'); ?></a>
                  </div>

                <?php if ($show->soldout=='on'): ?>
                  <div class="soldout-opaco-precio">.</div>              
                <?php endif ?>

                </div>

            </div>    
            <?php if ($show->soldout=='on'): ?>
              <div class="soldout-image">.</div>          
            <?php endif ?>
                        
            </div>
            </div>

        <?php endforeach ?>

        <div class="clearfix"></div>

        <!-- DEGUSTACION  -->

        <?php foreach ($cavas as $cava) : ?>

            <div style="padding-bottom: 40px;" class="col-xs-12 col-sm-12 col-md-12">
            <div style="background-color: #fff; overflow: auto; padding: 0;">

                <h3 class="titulo-show-nuevo fondo-titulo-show">

                <?php

                        switch (Yii::app()->getLanguage()) {
                            case "es": $titulo = $cava->titulo_es;$descripcion = $cava->des_es;
                                break;
                            case "en":
                                $titulo = $cava->titulo_en;
                                $descripcion = $cava->des_en;
                                if ($titulo=='') {$titulo = $cava->titulo_es;}
                                if ($descripcion=='') {$descripcion = $cava->des_es;}
                                break;
                            case "pt":
                                $titulo = $cava->titulo_pr;
                                $descripcion = $cava->des_pr;
                                if ($titulo=='') {$titulo = $cava->titulo_es;}
                                if ($descripcion=='') {$descripcion = $cava->des_es;}
                                break;
                            case "zh":
                                $titulo = $cava->titulo_zh;
                                $descripcion = $cava->des_zh;
                                if ($titulo=='') {$titulo = $cava->titulo_zh;}
                                if ($descripcion=='') {$descripcion = $cava->des_es;}
                                break;    
                        }
                         $url = urls_amigables($titulo);
                       echo $titulo;
                  ?>
                  
                 </h3>  

    <div class="col-xs-12 col-md-6 des-show fuente-show">
      <?php echo $descripcion ?>      
        <div class="divide15"></div>
      
      <?php if ($cava->duracion): ?>  
        <p><?php echo Yii::t('strings','DURACIÓN'); ?>: <?php echo $cava->duracion; ?> <?php echo Yii::t('strings','HS'); ?>.</p> 
      <?php endif ?> 

    </div>

            <div class="col-xs-12 col-md-6 no-padding">
                <div class="reserva-image">
                 <a href="<?php echo URLRAIZ.'/shopdeg/'.$cava->idShow.'/'.$url; ?>">
                 <div class="cont-img">
                   <img src="<?php echo URLRAIZ.'/pics/cava/'.$cava->imagen ?>" style="margin: 0px auto; border:1px solid #000" alt="" class='img-responsive'>
                 <span style="margin-top: 0px ! important;" class="positive"></span>
                 </div>
                 </a>
                </div>

                <div class="fondo-titulo-show col-md-12" style="padding: 12px 0 15px 0;">
                  <div class="col-md-7 precio">
                    <p><?php echo 'USD '.$cava->precio2_4; ?>.-</p>  
                    <h4><?php echo Yii::t('strings', 'TARIFA POR PERSONA'); ?></h4>
                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo URLRAIZ.'/shopdeg/'.$cava->idShow.'/'.$url; ?>" class="boton-reservar"><?php echo Yii::t('strings', 'RESERVAR'); ?></a>
                  </div>

                </div>

            </div>    
                        
            </div>
            </div>

        <?php endforeach ?>

        <div class="clearfix"></div>

        <!-- CLASES -->

        <?php foreach ($clases as $clase) : ?>

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

        <?php endforeach ?>

        <div class="clearfix"></div>

<!-- SHOWS ESPECIALES -->

        <?php foreach ($shows_especial as $show) : ?>

            <div style="padding-bottom: 40px;" class="col-xs-12 col-sm-12 col-md-12">
            <div style="background-color: #fff; overflow: auto; padding: 0;">

                <h3 class="titulo-show-nuevo fondo-titulo-show">

                <?php

                        switch (Yii::app()->getLanguage()) {
                            case "es": $titulo = $show->titulo_es;$descripcion = $show->des_es;
                                break;
                            case "en":
                                $titulo = $show->titulo_en;
                                $descripcion = $show->des_en;
                                if ($titulo=='') {$titulo = $show->titulo_es;}
                                if ($descripcion=='') {$descripcion = $show->des_es;}
                                break;
                            case "pt":
                                $titulo = $show->titulo_pr;
                                $descripcion = $show->des_pr;
                                if ($titulo=='') {$titulo = $show->titulo_es;}
                                if ($descripcion=='') {$descripcion = $show->des_es;}
                                break;
                            case "zh":
                                $titulo = $show->titulo_zh;
                                $descripcion = $show->des_zh;
                                if ($titulo=='') {$titulo = $show->titulo_zh;}
                                if ($descripcion=='') {$descripcion = $show->des_es;}
                                break;    
                        }
                         $url = urls_amigables($titulo);
                       echo $titulo;
                  ?>
                  
                 </h3>  

     <div class="col-xs-12 col-md-6 des-show fuente-show">
      <?php echo $descripcion ?>     
        <div class="divide15"></div>
        
        <?php if ($show->hora_cena): ?>
          <p><?php echo Yii::t('strings','CENA'); ?>: <?php echo $show->hora_cena; ?> <?php echo Yii::t('strings','HS'); ?>.</p>
        <?php endif ?>
        
        <?php if ($show->hora_show): ?>
          <p><?php echo Yii::t('strings','SHOW'); ?>: <?php echo $show->hora_show; ?> <?php echo Yii::t('strings','HS'); ?>.</p>
        <?php endif ?>

        <?php if ($show->duracion): ?>
          <p><?php echo Yii::t('strings','DURACIÓN'); ?>: <?php echo $show->duracion; ?> <?php echo Yii::t('strings','MIN'); ?>.</p>  
        <?php endif ?>

    </div>

            <div class="col-xs-12 col-md-6 no-padding">
                <div class="reserva-image">
                 <a href="<?php echo URLRAIZ.'/shop/'.$show->idShow.'/'.$url; ?>">
                 <div class="cont-img">
                   <img src="<?php echo URLRAIZ.'/pics/shows/'.$show->imagen ?>" style="margin: 0px auto; border:1px solid #000" alt="" class='img-responsive'>
                 <span style="margin-top: 0px ! important;" class="positive"></span>
                 </div>
                 </a>
                </div>

                <div class="fondo-titulo-show col-md-12" style="padding: 12px 0 15px 0;">
                  <div class="col-md-7 precio">
                    <p><?php echo 'USD '.$show->precio; ?>.-</p>  
                    <h4><?php echo Yii::t('strings', 'TARIFA POR PERSONA'); ?></h4>
                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo URLRAIZ.'/shop/'.$show->idShow.'/'.$url; ?>" class="boton-reservar"><?php echo Yii::t('strings', 'RESERVAR'); ?></a>
                  </div>
                <?php if ($show->soldout=='on'): ?>
                  <div class="soldout-opaco-precio"></div>              
                <?php endif ?>
                
                </div>

            </div>    
                    
            <?php if ($show->soldout=='on'): ?>
              <div class="soldout-image"></div>          
            <?php endif ?>

            </div>
            </div>

        <?php endforeach ?>

    </div>
  </section>


