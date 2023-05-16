  <!-- Navigation -->
  <section id="navigation" class="visible-nav dark-nav">
    <!-- Navigation Inner -->
    <div class="nav-inner">
      <!-- Site Logo -->
      <div class="site-logo">
        <a href="<?php echo Yii::app()->baseUrl ?>/#home" class="scroll logo">
          <!-- Your Logo -->
          <img src="<?php echo URLRAIZ.'/images/logo-aljibe-02.png' ?>" alt="logo" />
        </a>
      </div><!-- End Site Logo -->
      <a class="mini-nav-button dark"><i class="fa fa-bars"></i></a>
      <!-- Navigation Menu -->
              <?php
          switch (Yii::app()->getLanguage()) {
              case "es": $file = 'Menu-es.pdf';
                  break;
              case "en": $file = 'Menu-en.pdf';
                  break;
              case "fr": $file = 'Menu-fr.pdf';
                  break;
              case "de": $file = 'Menu-en.pdf';
                  break;
              case "it": $file = 'Menu-it.pdf';
                  break; 
              case "ja": $file = 'Menu-en.pdf';
                  break;
              case "pt": $file = 'Menu-en.pdf';
                  break;
              case "ru": $file = 'Menu-ru.pdf';
                  break;
              case "zh": $file = 'Menu-en.pdf';
                  break;
          }
     ?>
      <div class="nav-menu">
        <ul class="nav uppercase condensed"> 
          <li><a href="<?php echo URLRAIZ ?>/#salones" class="scroll"><?php echo Yii::t('strings', 'NUESTRO SALÓN'); ?></a></li>
          <li><a href="<?php echo URLRAIZ ?>/#theshow" class="scroll"><?php echo Yii::t('strings', 'EL SHOW'); ?></a></li>
          <li><a href="<?php echo URLRAIZ .'/menu/' ?>" target="new"><?php echo Yii::t('strings', 'LA CARTA'); ?></a></li>
          <li><a href="<?php echo URLRAIZ ?>/reservas" class="scroll"><?php echo Yii::t('strings', 'RESERVAS'); ?></a></li>
          <li><a href="<?php echo URLRAIZ ?>/#" id="SoundCloud" class="SoundCloud" data-toggle="modal" data-target="#modalSoundCloud"><?php echo Yii::t('strings', 'CANCIONES'); ?></a></li>
          <li><a href="<?php echo URLRAIZ ?>/ondemand" class="scroll"><?php echo Yii::t('strings', 'ONDEMAND'); ?></a></li>
          <li><a href="<?php echo URLRAIZ ?>/#contact" class="scroll"><?php echo Yii::t('strings', 'CONTACTO'); ?></a></li>
          <li><a href="<?php echo URLRAIZ ?>/#cava"><?php echo Yii::t('strings', 'NUESTROS SERVICIOS'); ?></a></li>
         
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