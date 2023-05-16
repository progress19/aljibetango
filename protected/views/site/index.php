  <!-- Page Loader -->
  <!-- 
  <section id="pageloader">
    <div class="logo-loading">
      <img src="<?php //echo URLRAIZ ?>/images/logo.png" class="" width="" alt="" >
    </div>  
    <div class="loader"></div>
  </section>
  -->

   <!-- Home Section -->
    <section id="home">   
    
      <div class="vimeo-wrapper">
         <iframe src="https://player.vimeo.com/video/386222438?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1" muted="muted" allow="autoplay; fullscreen" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
          </iframe>
      </div>
     
      <a id="tohash" href="#salones" class="home-arrow scroll uppercase bold"><i class="fa fa-angle-down"></i></a>

      <div class="conte-mute">
        <a class="audio-mute icon-round" href="#"><i class="fas fa-volume-mute"></i></a>
        <a class="audio-unmute icon-round displayNone" href="#"><i class="fas fa-volume-up"></i></a>   
      </div>

    </section><!-- End Home Section -->

  <section id="salones" class="waypoint">
      
  <div class="container-fluid">

    <div class="col-md-12" >
      <h1 style="font-size: 33px;" class="white cursiva">
        <?php echo Yii::t('strings', 'Nuestro gran salón Aljibe'); ?>
      </h1>
      <h2>
        <?php echo Yii::t('strings', 'Viví una experiencia imperdible con la mejor atención'); ?>
      </h2>
    </div>

    <a href="https://player.vimeo.com/video/689650649?autoplay=1&loop=1&autopause=0" class="overlay" data-rel="lightcase:myCollection:slideshow1">
       <img src="<?php echo URLRAIZ ?>/images/salon.jpg" style="width:100%" alt=""> 
    </a>

  </div>
      
</section> <!-- F salones -->

<section id="galeria">

    <div class="col-md-12" >
      <h1 style="font-size: 33px;" class="black cursiva">
        <?php echo Yii::t('strings', 'Show de Tango y Folclore'); ?>
      </h1>
      <h2>
        <?php echo Yii::t('strings', 'Más de 30 artistas en escena'); ?>
      </h2>
    </div>
    
    <div class="clearfix"></div>  

    <div id="transcroller-body" class="aos-all">
      
      <?php $delay = 100; foreach ($imagenes as $imagen) :?> 

        <div class="aos-item" data-aos="fade" data-aos-delay="<?php echo $delay; ?>">
          <div class="aos-item__inner pswp__item">
            <a href="<?php echo URLRAIZ.'/pics/imagenes/'.$imagen ?>" class="overlay" data-rel="lightcase:myCollection:slideshow">
              <img class="img-responsive" src="<?php echo URLRAIZ.'/pics/imagenes/'.$imagen ?>" alt="">
            </a>
          </div>
        </div>

     <?php $delay = $delay + 100; endforeach ?> 
     
    </div>
 
    <div class="clearfix"></div>
  
</section>

<section id="carta">

  <div class="col-md-12" >
    <h1 style="font-size: 33px;" class="white cursiva">
      <?php echo Yii::t('strings', 'La Carta'); ?>
    </h1>
    <h2>
      <?php echo Yii::t('strings', 'Los mejores platos gourmet acompañados del mejor show de tango.'); ?>
    </h2>
  </div>

    <div class="aos-all">
      
      <?php $delay = 100; foreach ($menus as $imagen) :?> 

        <div class="aos-item" data-aos="fade" data-aos-delay="<?php echo $delay; ?>">
          <div class="aos-item__inner pswp__item">
            <a target="_new" href="<?php echo URLRAIZ.'/menu/' ?>" class="overlay">
              <img class="img-responsive" src="<?php echo URLRAIZ.'/pics/menus/'.$imagen ?>" alt="">
            </a>
          </div>
        </div>

      <?php $delay = $delay + 100; endforeach ?> 
     
    </div>

  <div class="clearfix"></div>

</section>

  <!-- Reservas -->
  <section id="reservas" class="container-fluid">
  <div class="linea-dorada"></div>
  
    <div class="" style="padding-top: 10px;">
      <!-- Header -->
            
      <div class="col-md-12" >
        <h1 style="font-size: 33px;" class="white cursiva">
          <?php echo Yii::t('strings', 'Reserve hoy su lugar en pocos pasos'); ?>
        </h1>
        <h2>
          <?php echo Yii::t('strings', 'Disfrute el Show de Tango y Folclore más visitado de Argentina'); ?>
        </h2>
      </div>
      
      <?php $raya = 0; ?>

  <div class="owl-carousel-reservas">

  <!-- SHOWS TODOS LOS DIAS -->

      <?php foreach ($shows as $show) : ?>

           <?php

              switch (Yii::app()->getLanguage()) {
                  case "es": $titulo = $show->titulo_es;
                      break;
                  case "en":
                      $titulo = $show->titulo_en;
                      if ($titulo=='') {$titulo = $show->titulo_es;}
                      break;
                  case "pt":
                      $titulo = $show->titulo_pr;
                      if ($titulo=='') {$titulo = $show->titulo_es;}
                      break;
                 case "zh":
                      $titulo = $show->titulo_zh;
                      if ($titulo=='') {$titulo = $show->titulo_es;}
                      break;
              }

              $url = urls_amigables($titulo);
           
            ?>

        <div class="owl-item col-xs-12 col-md-3">

        <a class="hvr-float-shadow" href="<?php echo URLRAIZ.'/show/'.$show->idShow; ?>">

         <div class="item">
         
        <div class="conte-tit-dias">
          <?php if ($show->soldout=="on"): ?>
            <h5 class="titulo-reserva texto-tachado"><?php echo recortar_texto($titulo, 50); ?></h5>  
          <?php endif ?>
          <?php if ($show->soldout==""): ?>
            <h5 class="titulo-reserva"><?php echo recortar_texto($titulo, 50); ?></h5>  
          <?php endif ?>
    
            <?php if ($show->todoslosdias=="on") { echo '<h6>'.Yii::t('strings','TODOS LOS DIAS').'</h6>'; } 
              else {
              echo '<h6>'.Yii::app()->dateFormatter->formatDateTime($show->fecha, 'long', false).'</h6>';
              } ?>

        </div>  

          <hr>
            
            <div class="container conte-info">

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

          <hr>
      
          <div class="precio-res col-md-12">
              
              <?php if ($show->soldout=='on') : ?>
                <div class="soldout-opaco">
              <?php endif ?>

                  <?php if ($show->soldout=="on"): ?>
                    <h4 class="precio-reserva texto-tachado"><?php echo 'USD '.$show->precio; ?></h4>  
                  <?php endif ?>
                  <?php if ($show->soldout==""): ?>
                    <h3><?php echo 'USD '.$show->precio; ?>.-</h3>
                    <h4 class="precio-reserva"><?php echo Yii::t('strings','TARIFA POR PERSONA'); ?></h4>  
                  <?php endif ?>

            <?php if ($show->soldout=='on') : ?>
              </div>
            <?php endif ?>
          
          </div>
 
        </div>
        </a>
        </div>
        

      <?php $raya++;endforeach ?> 

      <!-- SHOWS ESPECIALES --> 

      <?php foreach ($shows_especial as $show) : ?>

          <?php

          switch (Yii::app()->getLanguage()) {
              case "es": $titulo = $show->titulo_es;
                  break;
              case "en":
                  $titulo = $show->titulo_en;
                  if ($titulo=='') {$titulo = $show->titulo_es;}
                  break;
              case "pt":
                  $titulo = $show->titulo_pr;
                  if ($titulo=='') {$titulo = $show->titulo_es;}
                  break;
             case "zh":
                  $titulo = $show->titulo_zh;
                  if ($titulo=='') {$titulo = $show->titulo_es;}
                  break;
          }

          $url = urls_amigables($titulo);
         
          ?>

        <div class="owl-item col-xs-12 col-md-3">
        <a class="hvr-float-shadow" href="<?php echo URLRAIZ.'/show/'.$show->idShow; ?>">
        <div class="item">
          
        <div class="reserva-image">
           
           <div class="cont-img-res">
             
            <div class="conte-tit-dias">
              <h5><?php echo recortar_texto($titulo, 60); ?></h5>

              <?php if ($show->todoslosdias=="on") {echo '<h6>'.Yii::t('strings','TODOS LOS DIAS').'</h6>';} 
                else {
                 echo '<h6>'.Yii::app()->dateFormatter->formatDateTime($show->fecha, 'long', false).'</h6>';
                } ?>
            </div>

          <hr>
            
            <div class="container conte-info">
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

          <hr>
                  
            <div class="precio-res col-md-12">
            <h3><?php echo 'USD '.$show->precio; ?>.-</h3>
            <h4 class="precio-reserva"><?php echo Yii::t('strings','TARIFA POR PERSONA'); ?></h4> 
            </div>

           </div>
          
          </div>

        </div>
        </a>
        </div>
        

      <?php $raya++;endforeach ?>  

      <!-- DEGUSTACIONES --> 

      <?php foreach ($cavas as $cava) : ?>

          <?php

            switch (Yii::app()->getLanguage()) {
                case "es": $titulo = $cava->titulo_es;
                    break;
                case "en":
                    $titulo = $cava->titulo_en;
                    if ($titulo=='') {$titulo = $cava->titulo_es;}
                    break;
                case "pt":
                    $titulo = $cava->titulo_pr;
                    if ($titulo=='') {$titulo = $cava->titulo_es;}
                    break;
               case "zh":
                    $titulo = $cava->titulo_zh;
                    if ($titulo=='') {$titulo = $cava->titulo_es;}
                    break;
            }

            $url = urls_amigables($titulo);
           
          ?>

        <div class="owl-item col-xs-12 col-md-3">
        <a class="hvr-float-shadow" href="<?php echo URLRAIZ.'/deg'; ?>">
        <div class="item">

          <div class="reserva-image">
           
           <div class="cont-img-res">
           
            <div class="conte-tit-dias">
              <h5><?php echo recortar_texto($titulo, 60); ?></h5>

              <?php if ($cava->todoslosdias=="on") {echo '<h6>'.Yii::t('strings','TODOS LOS DÍAS').'</h6>';} 
              else {
               echo '<h6>'.Yii::app()->dateFormatter->formatDateTime($cava->fecha, 'long', false).'<h6>';
              } ?>
            </div>  
          
              <hr>
                
            <div class="container conte-info">
              <?php if ($cava->duracion): ?>
                <p><?php echo Yii::t('strings','DURACIÓN'); ?>: <?php echo $cava->duracion; ?> <?php echo Yii::t('strings','MIN'); ?>.</p>
              <?php endif ?>
            </div>

              <hr>
                  
              <div class="precio-res col-md-12">
                  <h3><?php echo 'USD '.$cava->precio2_4; ?>.-</h3>
                  <h4 class="precio-reserva"><?php echo Yii::t('strings','TARIFA POR PERSONA'); ?></h4> 
              </div>

           </div>
          
          </div>

        </div>
        </a>
        </div>
        

      <?php endforeach ?>  

<!-- fin cava -->

      <!-- CLASES --> 

      <?php foreach ($clases as $clase) : ?>

         <?php

            switch (Yii::app()->getLanguage()) {
                case "es": $titulo = $clase->titulo_es;
                    break;
                case "en":
                    $titulo = $clase->titulo_en;
                    if ($titulo=='') {$titulo = $clase->titulo_es;}
                    break;
                case "pt":
                    $titulo = $clase->titulo_pr;
                    if ($titulo=='') {$titulo = $clase->titulo_es;}
                    break;
               case "zh":
                    $titulo = $clase->titulo_zh;
                    if ($titulo=='') {$titulo = $clase->titulo_es;}
                    break;
            }

            $url = urls_amigables($titulo);
           
      ?>
        
        <div class="owl-item col-xs-12 col-md-3">
        <a class="hvr-float-shadow" href="<?php echo URLRAIZ.'/clase'; ?>">
          <div class="item">

            <div class="reserva-image">
             
             <div class="cont-img-res">
             
              <div class="conte-tit-dias">
              <h5><?php echo recortar_texto($titulo, 60); ?></h5>

                <?php if ($clase->todoslosdias=="on") {echo '<h6>'.Yii::t('strings','TODOS LOS DÍAS').'</h6>';} 
                  else {
                    echo '<h6>'.Yii::app()->dateFormatter->formatDateTime($clase->fecha, 'long', false).'</h6>';
                } ?>
              </div>  

                <hr>
                  
            <div class="container conte-info">
          
              <?php if ($clase->duracion): ?>
                <p><?php echo Yii::t('strings','DURACIÓN'); ?>: <?php echo $clase->duracion; ?> <?php echo Yii::t('strings','MIN'); ?>.</p>
              <?php endif ?>
            </div>

                <hr>
                    
                  <div class="precio-res col-md-12">
                      <h3><?php echo 'USD '.$clase->precio1; ?>.-</h3>
                      <h4 class="precio-reserva"><?php echo Yii::t('strings','TARIFA POR PERSONA'); ?></h4> 
                  </div>

             </div>
            
            </div>

          </div>
        </a>
        </div>
        
      <?php endforeach ?>  

  <!-- fin clases reservas -->

  <div class="clearfix"></div>
  <div class="col-md-2 col-md-offset-5">
    <a href="reservas" class="boton_reservar"><?php echo Yii::t('strings', 'VER TODOS LOS SHOWS'); ?></a>   
  </div>

    </div>

      <div class="clearfix"></div>
 
    </div><!-- End About Inner -->
  
  </section><!-- End About Section -->

    <!-- Contact Section -->
  <section id="contact" class="container">
    <!-- Contact Inner -->
    <div class="inner contact">

      <!-- Header -->
      <h2 class="titulo cursiva"><?php echo Yii::t('strings', 'Contacto'); ?></h2>
      <h4 class="subtitulo"><?php echo Yii::t('strings', 'Dejanos tu consulta!'); ?></h4><br>
      
      <div class="col-md-5">

      <!-- Form Area -->
      <div class="contact-form">
        <div id="mensaje"></div>
        <!-- Form -->
        <form id="frmContacto">
                      
            <input type="text" name="nombre" id="nombre" class="form light" placeholder="<?php echo Yii::t('strings', 'NOMBRE'); ?>" />
            <input type="text" name="apellido" id="apellido" class="form light" placeholder="<?php echo Yii::t('strings', 'APELLIDO'); ?>" />
            <input type="text" name="telefono" id="telefono" class="form light" placeholder="<?php echo Yii::t('strings', 'TELEFONO'); ?>" />
            <input type="email" name="email" id="email" class="form light" placeholder="<?php echo Yii::t('strings', 'EMAIL'); ?>" />
            <input type="text" name="pais" id="pais" class="form light" placeholder="<?php echo Yii::t('strings', 'PAIS'); ?>" />

            <textarea name="comentario" id="comentario" class="form textarea light"  placeholder="<?php echo Yii::t('strings', 'COMENTARIO'); ?>"></textarea>

            <div class="col-md-5 col-md-offset-7 no-padding">
              <input class="boton_contacto pull-right" name="submit" value="<?php echo Yii::t('strings', 'ENVIAR'); ?>" type="submit">
            </div>

            <input type="hidden" class="form-control" name="msg_nombre" id="msg_nombre" value="<?php echo Yii::t('strings', 'Por favor ingrese su nombre'); ?>">
            <input type="hidden" class="form-control" name="msg_email" id="msg_email" value="<?php echo Yii::t('strings', 'Por favor ingrese su email'); ?>">   
            <input type="hidden" class="form-control" name="msg_comentario" id="msg_comentario" value="<?php echo Yii::t('strings', 'Por favor, complete el campo'); ?>">   
            <input type="hidden" class="form-control" name="msg_enviando" id="msg_enviando" value="<?php echo Yii::t('strings', 'ENVIANDO MENSAJE...'); ?>">
            <input type="hidden" class="form-control" name="msg_enviadoOK" id="msg_enviandoOK" value="<?php echo Yii::t('strings', 'Mensaje enviado correctamente, en breve recibirá respuesta. Gracias!'); ?>">
            <input type="hidden" class="form-control" name="url" id="URLRAIZ" value="<?php echo URLRAIZ  ?>">
        
          <div class="clear"></div>

        </form>

      </div><!-- End Contact Form Area -->

      </div>

      <div class="col-md-7" style="border-left: 1px solid #c39350;">
        
        <div id="google-map"></div>

      </div>


    </div><!-- End Inner -->
  </section><!-- End Contact Section -->

<!-- I cava ##########################################################################################################################-->

<section id="cava">

  <div class="container-fluid">

    <div class="col-md-12" >
      <h1 style="font-size: 33px;" class="white cursiva">
        <?php echo Yii::t('strings', 'Conozca nuestros servicios a medida'); ?>
      </h1>
    </div>
    
    <div class="seven-cols">

      <!-- VENTANA -->  

      <div class="col-md-1 no-padding border1px">
                                
          <div class="titulo-cell-servicios-large">
            <p><?php echo Yii::t('strings', 'CENA + TANGO + SHOW + CLASE DE TANGO'); ?></p>
          </div>
       
          <div class="cell-servicios back-ventana">
            <a href="http://www.laventanaweb.com" target="new" class="hvr-push"> 
              <img src="<?php echo URLRAIZ.'/images/logo-ventana-web.png' ?>" alt="logo" class="img-responsive logo-servicios"/>
            </a>
          </div>

      </div>

      <!-- GALA -->

      <div class="col-md-1 no-padding border1px">
        
        <div class="titulo-cell-servicios">
          <p><?php echo Yii::t('strings', 'CENA + TANGO + SHOW'); ?></p>
        </div>
                
        <div class="cell-servicios back-gala">
          <a href="http://www.galatango.com" target="new" class="hvr-push"> 
            <img src="<?php echo URLRAIZ.'/images/logo-bg-gala.png' ?>" alt="logo" class="img-responsive logo-servicios"/>
          </a>
        </div>
        
      </div>

      <!-- MICHELANGELO -->  

      <div class="col-md-1 no-padding border1px">
        
        <div class="titulo-cell-servicios">
          <p><?php echo Yii::t('strings', 'CENA + TANGO + SHOW'); ?></p>
        </div>
        
        <div class="cell-servicios back-miche">
          <a href="http://michelangeloweb.com/" target="new" class="hvr-push"> 
            <img src="<?php echo URLRAIZ.'/images/logo-michel-angelo.png' ?>" alt="logo" class="img-responsive logo-servicios-michel"/>
          </a>
        </div>
        
      </div>

      <!-- TERRAZA -->  

      <div class="col-md-1 no-padding border1px">
        
        <div class="titulo-cell-servicios">
          <p><?php echo Yii::t('strings', 'ROOFTOP'); ?></p>
        </div>
        
        <div class="cell-servicios back-terraza">
          <a href="terraza" class="hvr-push"> 
            <img src="<?php echo URLRAIZ.'/images/terraza-logo.png' ?>" alt="logo" class="img-responsive logo-servicios-terraza"/>
          </a>
        </div>
        
      </div>

      <!-- CAVA -->  

      <div class="col-md-1 no-padding border1px">
        
        <div class="titulo-cell-servicios">
          <p><?php echo Yii::t('strings', 'DEGUSTACIÓN DE VINOS'); ?></p>
        </div>
        
        <div class="cell-servicios back-cava">
          <a href="cava" class="hvr-push">
            <img src="<?php echo URLRAIZ.'/images/cava-logo.png' ?>" alt="logo" class="img-responsive logo-servicios-cava"/>
          </a>
        </div>
        
      </div>

      <!-- ESTUDIO -->  

      <div class="col-md-1 no-padding border1px">
        
        <div class="titulo-cell-servicios">
          <p><?php echo Yii::t('strings', 'CLASE DE TANGO'); ?></p>
        </div>
        
        <div class="cell-servicios back-estudio">
          <a href="estudio" class="hvr-push">
            <img src="<?php echo URLRAIZ.'/images/estudio-de-tango-logo.png' ?>" alt="logo" class="img-responsive logo-servicios-estudio"/>
          </a>
        </div>
        
      </div>

      <!-- DANTE BAR -->  

      <div class="col-md-1 no-padding border1px">
        
        <div class="titulo-cell-servicios">
          <p><?php echo Yii::t('strings', 'DANTE BAR'); ?></p>
        </div>
        
        <div class="cell-servicios back-dante">
          <a href="https://michelangeloweb.com/gastronomia/cocktails" target="new" class="hvr-push">
            <img src="<?php echo URLRAIZ.'/images/logo-bg-dante-bar.png' ?>" alt="logo" class="img-responsive logo-servicios-estudio"/>
          </a>
        </div>
        
      </div>

    </div>

  </div>

</section>

<!-- F cava ##########################################################################################################################-->

<div class="clearfix"></div>

<!-- Coronavirus modal -->

<div class="modal fade" id="modalCoronaVirus" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content modalCoronaVirus">
     
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>
          <?php echo Yii::t('strings', '¡Les compartimos todos nuestros shows para que puedan pasar tiempo en casa!'); ?>
        </p>

        <b><p>#yomequedoencasa</p></b>
        <b><p>#quedateencasa</p></b>
        <b><p>#stayathome</p></b>
        <b><p>#wewillbeback</p></b>

        <a href="https://vimeo.com/tangoshow" target="new">
          <input class="boton_contacto" name="submit" value="<?php echo Yii::t('strings', 'VER VIDEOS'); ?>" type="submit">
        </a>

      </div>
      
    </div>
  </div>
</div>

<!-- fiestas modal -->

<div class="modal fade" id="modalFiestas" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content modalCoronaVirus">

      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <a href="reservas">
          <img src="<?php echo URLRAIZ.'/images/AljibeTango24-31.jpg' ?>" class="img-responsive" />
        </a>

      </div>

      </div>
  </div>
</div> <!-- fin modal sound !-->

<script>

  $(window).on('load',function(){
    $('#modalFiestas').modal('show');
  });

  jQuery(document).ready(function($) {

      const iframe = document.querySelector('iframe');
      const player = new Vimeo.Player(iframe);

      $(document).on('click', '.audio-mute', function(e) {

         $('.audio-mute').addClass('displayNone');
         $('.audio-unmute').removeClass('displayNone');

            player.setVolume(0.5).then(function(volume) {
            // volume was set
            }).catch(function(error) {
               switch (error.name) {
                  case 'RangeError':
               // the volume was less than 0 or greater than 1
            break;

            default:
            // some other error occurred
            break;
            }
            });

            e.preventDefault();

      });

      $(document).on('click', '.audio-unmute', function(e) {

            $('.audio-unmute').addClass('displayNone');
            $('.audio-mute').removeClass('displayNone');

            player.setMuted(true).then(function(muted) {
               // muted was turned on
               }).catch(function(error) {
               // an error occurred
               });

            e.preventDefault();

      });
    
  });
</script>

<script>
  function formSubmit(response) {
      // submit the form which now includes a g-recaptcha-response input
       $("#frmContacto").submit();
      return true;
  }
</script>

<div class="g-recaptcha" 
  data-sitekey="6LevK_sUAAAAAODo57YUXSOV-xyZf6j1oCCbiegT"
    data-size="invisible" 
    data-callback="formSubmit">
</div>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script>