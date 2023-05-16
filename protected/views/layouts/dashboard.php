<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>ALJIBE TANGO - Tango Show - Show de Tango - Buenos Aires Tango Show - Argentina Tango Show - Tango - San Telmo Tango Show - Show Folklore - Show de Boleadoras - Aljibe Tango Folclore - Tango Clases - Clases de Tango</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <!--Favicon -->
    
  <link rel="icon" type="image/png" href="images/favicon.png" />
    
  <!-- CSS Files -->
    
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.min.css" />
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dark-style.css" />
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/responsive.css" />
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/hover-min.css" />

  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/galeria/galeria.css" />
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/galeria/aos.css" />
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/galeria/magnific-popup.css" />
   
  <!-- Skin Colors -->
  <link id="changeable-colors" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/colors/orange.css" />

  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/galeria/lightcase.css">

  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/soundmanager/script/soundmanager2.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/soundmanager/script/bar-ui.js"></script>
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/soundmanager/css/bar-ui.css" />

  <!-- demo for this page only, you don't need this stuff -->
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/soundmanager/script/demo.js"></script>
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/soundmanager/css/demo.css" />

  <!-- End CSS Files -->

<!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-K3VGGL2');
</script>
<!-- End Google Tag Manager -->
 
<!--
<script src="https://code.jquery.com/jquery-1.9.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.0.0.js"></script>
-->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3VGGL2";height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

  <!-- Navigation -->
  <!--<section id="navigation" class="not-visible-nav dark-nav">-->
  <section id="navigation" class="not-visible-nav dark-nav">
    <!-- Navigation Inner -->
    <div class="nav-inner">
      <!-- Site Logo -->
      <div class="site-logo">
        <a href="#home" class="scroll logo" id="logo-home">
          <!-- Your Logo -->
          <img src="<?php echo URLRAIZ.'/images/logo-aljibe-02.png' ?>" alt="logo" />
        </a>
      </div><!-- End Site Logo -->
      <a class="mini-nav-button dark"><i class="fa fa-bars"></i></a>
      <!-- Navigation Menu -->
      <div class="nav-menu">
        
        <ul class="nav uppercase condensed" id="top-menu">
          
          <li><a href="#salones" class="scroll"><?php echo Yii::t('strings', 'NUESTRO SALÓN'); ?></a></li>
          <li><a href="#galeria" class="scroll"><?php echo Yii::t('strings', 'EL SHOW'); ?></a></li>
          <li><a href="#carta" class="scroll"><?php echo Yii::t('strings', 'LA CARTA'); ?></a></li>
          <li><a href="reservas" class="scroll"><?php echo Yii::t('strings', 'RESERVAS'); ?></a></li>
          <li><a href="#" id="SoundCloud" class="SoundCloud" data-toggle="modal" data-target="#modalSoundCloud"><?php echo Yii::t('strings', 'CANCIONES'); ?></a></li>
          <li><a href="ondemand" class="scroll"><?php echo Yii::t('strings', 'ONDEMAND'); ?></a></li>
          <li><a href="#contact" class="scroll"><?php echo Yii::t('strings', 'CONTACTO'); ?></a></li>
          <li><a href="#cava" class="scroll"><?php echo Yii::t('strings', 'NUESTROS SERVICIOS'); ?></a></li>
         
          <li>
            <?php $this->widget('ext.LangPick.ELangPick', array(
              'pickerType' => 'dropdown',              
              'buttonsSize' => 'small',                
            )); ?>
          </li>

          <span class="conte-icon-header">
            
            <a href="https://www.facebook.com/aljibe.tango" target="_new" class="icon-social-menu hvr-push">
              <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
            </a>

            <a href="https://www.instagram.com/aljibe.ba" target="_new" class="icon-social-menu hvr-push">
              <i class="fa fa-instagram fa-fw" aria-hidden="true"></i>
            </a>

          </span>

        </ul>

      </div><!-- End Navigation Menu -->
    </div><!-- End Navigation Inner -->
  </section><!-- End Navigation Section -->

  <?php echo $content; ?>

  <!-- Site Socials and Address -->
  <section id="site-socials" class="no-padding gris-bg">
    <div class="site-socials container-fluid no-padding">

        <div class="row">
        <div class="col-md-12">

            <div class="col-md-4" id="text-footer" style="text-align: left; line-height: 0.9; padding-left: 15px; margin-top: 13px;">  
              
              <h1><?php echo Yii::t('strings', 'RESERVAS'); ?></h1>
              
              <a href="tel:+541132203300">
                <p><i class="fa fa-phone fa-fw" aria-hidden="true"></i> (+5411) 3220-3300</p>
              </a>
              <p><i class="fa fa-whatsapp fa-fw" aria-hidden="true"></i><a href="https://api.whatsapp.com/send?phone=5491168759015" target="_blank"> (+54911) 6875-9015</p>
              <p><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i> <a href="mailto:info@aljibetango.com">info@aljibetango.com</a></p>
              <p><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> Balcarce 425</p>
              
              <a href="https://www.facebook.com/aljibe.tango/?ref=bookmarks" target="_new" class="icon-social hvr-push">
                <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
              </a>

              <a href="https://www.instagram.com/aljibe.ba" target="_new" class="icon-social hvr-push">
                <i class="fa fa-instagram fa-fw" aria-hidden="true"></i>
              </a>

              <a href="https://www.youtube.com/watch?v=357tpUwyudY" target="_new" class="icon-social hvr-push">
                <i class="fa fa-youtube fa-fw" aria-hidden="true"></i>
              </a>

              <a href="https://vimeo.com/386222438" target="_new" class="icon-social hvr-push">
                <i class="fa fa-vimeo-square fa-fw" aria-hidden="true"></i>
              </a>

              <a href="https://www.tiktok.com/@laventana.ba" target="_new" class="icon-social hvr-push">
                <i class="fab fa-tiktok fa-fw"></i>
              </a>

          </div>


          <div class="col-md-4">
              <div class="safe-footer"> 
                <img src="<?php echo URLRAIZ.'/images/Safe-Travel.png' ?>" alt="logo" class="img-responsive" />
              </div>
          </div> 


          <div class="col-md-4">
              <div class="logo-footer">
                <img src="<?php echo URLRAIZ.'/images/logo-aljibe-02.png' ?>" alt="logo" class="img-responsive" />
              </div>
          </div>
            
        </div>
      
      </div>

    </div><!-- End Inner -->
  </section><!-- End Site Socials and Address -->

  <!-- Footer -->
  <footer class="footer">
    <!-- Copyright -->
    <p class="copyright normal">
      <?php echo Yii::t('strings','Casco Histórico - San Telmo - Buenos Aires - Argentina - Todos los derechos reservados por Aljibe Tango') ?> by <a href="http://pixtudios.net" target="new">Pixtudios.</a>
    </p> 
  </footer><!-- End Footer -->

  <!-- soundcloud modal -->

<div class="modal fade" id="modalSoundCloud" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content modalCoronaVirus">
     
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

<img src="<?php echo URLRAIZ.'/pics/mp3/SV-alj-play.jpg' ?>" class="img-responsive" />

<div class="sm2-bar-ui compact full-width flat" >

 <div class="bd sm2-main-controls">

  <div class="sm2-inline-texture"></div>
  <div class="sm2-inline-gradient"></div>

  <div class="sm2-inline-element sm2-button-element">
   <div class="sm2-button-bd">
    <a href="#play" id="SM2BarPlayer" class="sm2-inline-button sm2-icon-play-pause">Play / pause</a>
   </div>
  </div>

  <div class="sm2-inline-element sm2-inline-status">

   <div class="sm2-playlist">
    <div class="sm2-playlist-target">
     <!-- playlist <ul> + <li> markup will be injected here -->
     <!-- if you want default / non-JS content, you can put that here. -->
     <noscript><p>JavaScript is required.</p></noscript>
    </div>
   </div>

   <div class="sm2-progress">
    <div class="sm2-row">
    <div class="sm2-inline-time">0:00</div>
     <div class="sm2-progress-bd">
      <div class="sm2-progress-track">
       <div class="sm2-progress-bar"></div>
       <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
      </div>
     </div>
     <div class="sm2-inline-duration">0:00</div>
    </div>
   </div>

  </div>

  <div class="sm2-inline-element sm2-button-element sm2-volume">
   <div class="sm2-button-bd">
    <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
    <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
   </div>
  </div>

 </div>

 <div class="bd sm2-playlist-drawer sm2-element">

  <div class="sm2-inline-texture">
   <div class="sm2-box-shadow"></div>
  </div>

  <!-- playlist content is mirrored here -->

  <div class="sm2-playlist-wrapper">
    <ul class="sm2-playlist-bd">
     <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/pics/mp3/MALENA - AljibeTango.MP3">MALENA</a></li>
    </ul>
  </div>

 </div>

</div>
  

      </div>
      
    </div>
  </div>
</div>

  <div class="btn-whatsapp"> 
      <a href="https://api.whatsapp.com/send?phone=5491168759015" target="_blank">
          <img src="<?php echo URLRAIZ ?>/images/btn_whatsapp.png" />
      </a>
  </div>

  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.appear.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-latest.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/maps.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.slabtext.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/forms.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/galeria/aos.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/galeria/lightcase.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-touch-events/1.0.5/jquery.mobile-events.js"></script>

  <script src="https://kit.fontawesome.com/7bf2bb160b.js" crossorigin="anonymous"></script>

   <!-- End JS Files -->

  <script>

  $(".SoundCloud").click( function() {
        document.getElementById('SM2BarPlayer').click();
     });

  $(".close").click( function() {
      soundManager.stopAll();
  });

  /*
      $(window).on('load',function(){
          $('#modalSoundCloud').modal('show');
      });
  */
  </script>


    <script>
      AOS.init({
        easing: 'ease-in-cubic',
        once: true,
        delay: 2600,
      });
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function($) {

        $('a[data-rel^=lightcase]').lightcase({
          swipe: true,
          transition: 'scrollHorizontal',
          speedIn: 400,
          showSequenceInfo: false,
        });
        
      });
    </script>

</body>

</html>