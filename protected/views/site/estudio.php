<!-- Page Loader -->
<section id="pageloader">
  <div class="logo-loading">
    <img src="<?php echo URLRAIZ ?>/images/logo-aljibe-02.png" class="" width="" alt="" >
  </div>  
  <div class="loader"></div>
</section>

<?php require 'menu_.php';  ?>

  <!-- experiencia -->
  <section id="terraza-int" class="container">
   <div class="inner">

        <h1 style="font-size: 33px;" class="white cursiva">
          <?php echo Yii::t('strings', 'Estudio de Tango'); ?>
        </h1>
        <h2>
          <?php echo Yii::t('strings', 'Clases de tango privadas o grupales'); ?>.
        </h2>

    <div class="box-cava" id="clases">
      <div class="col-md-12 fondo-escuela no-padding">
        
        <div class="col-md-5 no-padding texto-cava">
          
          <?php echo $descripcion; ?>

        </div>

        <div class="col-md-7 no-padding">
          
              <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/386222955?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
              <script src="https://player.vimeo.com/api/player.js"></script>

        </div>

      </div>
    </div>
   </div>
  </section>









