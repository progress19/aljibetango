<div class="col-md-12 logo">
    <img src="<?php echo URLRAIZ.'/images/logo-aljibe-02.png' ?>" alt="logo" />
</div>

    <div class="clearfix"></div>       

	<div class="one_c animate__animated">
		<p><?php echo Yii::t('strings', 'Cortesía del personal'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='one_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
	</div>

    <div class="two_c animate__animated displayNone">
        <p><?php echo Yii::t('strings', 'Calidad de instalaciones'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='two_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
    </div>

    <div class="three_c animate__animated displayNone">
        <p><?php echo Yii::t('strings', 'Bloque de Tango'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='three_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
    </div>

    <div class="four_c animate__animated displayNone">
        <p><?php echo Yii::t('strings', 'Bloque de Folclore'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='four_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
    </div>

    <div class="five_c animate__animated displayNone">
        <p><?php echo Yii::t('strings', 'Vestuario'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='five_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
    </div>

    <div class="six_c animate__animated displayNone">
        <p><?php echo Yii::t('strings', 'Atención del mozo'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='six_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
    </div>

    <div class="seven_c animate__animated displayNone">
        <p><?php echo Yii::t('strings', 'Temperatura y presentación de la comida'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='seven_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
    </div>

    <div class="eight_c animate__animated displayNone">
        <p><?php echo Yii::t('strings', 'Sabor de la comida'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='eight_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
    </div>

    <div class="nine_c animate__animated displayNone">
        <p><?php echo Yii::t('strings', 'Calidad del vino'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='nine_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
    </div>

    <div class="ten_c animate__animated displayNone">
        <p><?php echo Yii::t('strings', 'Transporte'); ?></p>
        <?php for ($i=1; $i < 6; $i++) {echo "<img class='ten_r start' data-num='".$i."' src='images/star_y.png' />";} ?>
    </div>


<!--
Bloque de Tango
Bloque de Folclore
Vestuario
Atención del mozo
Temperatura y presentacion de la comida
Sabor de la comida
Calidad del vino
Transporte
-->

    <div class="encuesta-form animate__animated displayNone">
        <div id="mensaje"></div>
        <!-- Form -->
        <form id="frmEncuesta">
                      
            <input type="text" name="nombre" id="nombre" class="form light" placeholder="<?php echo Yii::t('strings', 'NOMBRE'); ?>" />
            <input type="email" name="email" id="email" class="form light" placeholder="<?php echo Yii::t('strings', 'EMAIL'); ?>" />
            
            <?php 
            $pais='';
            echo CHtml::dropDownList('idPais', $pais, 
              CHtml::listData(Paises::model()->findAll(array('order' => 'nombre')),
              'idPais', 'nombre'),
              $options = array(
                    'class' => 'form-control',
                    'style' => 'width:100%;height:37px;',
                    'prompt' => Yii::t('strings','SELECCIONE PAIS'),
                ));
             
             ?>

            <textarea name="comentarios" id="comentarios" class="form textarea light"  placeholder="<?php echo Yii::t('strings', 'COMENTARIO'); ?>"></textarea>

            <div class="col-md-5 col-md-offset-7 no-padding">
              <input class="button_send pull-right" name="submit" value="<?php echo Yii::t('strings', 'ENVIAR'); ?>" type="submit">
            </div>

            <input type="hidden" name="msg_nombre" id="msg_nombre" value="<?php echo Yii::t('strings', 'Por favor ingrese su nombre'); ?>">
            <input type="hidden" name="msg_email" id="msg_email" value="<?php echo Yii::t('strings', 'Por favor ingrese su email'); ?>">   
            <input type="hidden" name="msg_comentario" id="msg_comentario" value="<?php echo Yii::t('strings', 'Por favor, complete el campo'); ?>">   
            <input type="hidden" name="msg_thank" id="msg_thank" value="<?php echo Yii::t('strings', 'GRACIAS! Le enviaremos un email con el cupón del 20% de descuento para su próxima visita. Puede ser transferible'); ?>.">
            <input type="hidden" class="form-control" name="url" id="URLRAIZ" value="<?php echo URLRAIZ  ?>">
        
            <input type="hidden" name="one" id="one" value="">
            <input type="hidden" name="two" id="two" value="">
            <input type="hidden" name="three" id="three" value="">
            <input type="hidden" name="four" id="four" value="">
            <input type="hidden" name="five" id="five" value="">
            <input type="hidden" name="six" id="six" value="">
            <input type="hidden" name="seven" id="seven" value="">
            <input type="hidden" name="eight" id="eight" value="">
            <input type="hidden" name="nine" id="nine" value="">
            <input type="hidden" name="ten" id="ten" value="">
            
          <div class="clear"></div>

        </form>

    </div>

    <div class="col-md-6 pull-right counter_number">
    	<span id="counter_number">1</span> / 10
    </div>

<script>

	var star_y = "<?php echo URLRAIZ.'/images/star_y.png' ?>"
    var star_w = "<?php echo URLRAIZ.'/images/star_w.png' ?>"

    /* one */
    $('.one_r').click(function() { 
        $('#one').val($(this).data('num'));
        $('.one_c').addClass('animate__backOutLeft');
        $('.two_c').removeClass('displayNone');
        $('.two_c').addClass('animate__backInRight');
        $('.one_c').addClass('displayNone');
        $('#counter_number').html('2');
     });

    /* two */
    $('.two_r').click(function() { 
        $('#two').val($(this).data('num'));
        $('.two_c').addClass('animate__backOutLeft');
        $('.three_c').removeClass('displayNone');
        $('.three_c').addClass('animate__backInRight');
        $('.two_c').addClass('displayNone');
        $('#counter_number').html('3');
     });

    /* three */
    $('.three_r').click(function() { 
        $('#three').val($(this).data('num'));
        $('.three_c').addClass('animate__backOutLeft');
        $('.four_c').removeClass('displayNone');
        $('.four_c').addClass('animate__backInRight');
        $('.three_c').addClass('displayNone');
        $('#counter_number').html('4');
     });

    /* four */
    $('.four_r').click(function() { 
        $('#four').val($(this).data('num'));
        $('.four_c').addClass('animate__backOutLeft');
        $('.five_c').removeClass('displayNone');
        $('.five_c').addClass('animate__backInRight');
        $('.four_c').addClass('displayNone');
        $('#counter_number').html('5');
     });

    /* five */
    $('.five_r').click(function() { 
        $('#five').val($(this).data('num'));
        $('.five_c').addClass('animate__backOutLeft');
        $('.six_c').removeClass('displayNone');
        $('.six_c').addClass('animate__backInRight');
        $('.five_c').addClass('displayNone');
        $('#counter_number').html('6');
     });

    /* six */
    $('.six_r').click(function() { 
        $('#six').val($(this).data('num'));
        $('.six_c').addClass('animate__backOutLeft');
        $('.seven_c').removeClass('displayNone');
        $('.seven_c').addClass('animate__backInRight');
        $('.six_c').addClass('displayNone');
        $('#counter_number').html('7');
     });

    /* seven */
    $('.seven_r').click(function() { 
        $('#seven').val($(this).data('num'));
        $('.seven_c').addClass('animate__backOutLeft');
        $('.eight_c').removeClass('displayNone');
        $('.eight_c').addClass('animate__backInRight');
        $('.seven_c').addClass('displayNone');
        $('#counter_number').html('8');
     });

    /* eight */
    $('.eight_r').click(function() { 
        $('#eight').val($(this).data('num'));
        $('.eight_c').addClass('animate__backOutLeft');
        $('.nine_c').removeClass('displayNone');
        $('.nine_c').addClass('animate__backInRight');
        $('.eight_c').addClass('displayNone');
        $('#counter_number').html('9');
     });

    /* nine */
    $('.nine_r').click(function() { 
        $('#nine').val($(this).data('num'));
        $('.nine_c').addClass('animate__backOutLeft');
        $('.ten_c').removeClass('displayNone');
        $('.ten_c').addClass('animate__backInRight');
        $('.nine_c').addClass('displayNone');
        $('#counter_number').html('10');
     });

    /* ten */
    $('.ten_r').click(function() { 
        $('#ten').val($(this).data('num'));
        $('.ten_c').addClass('animate__backOutLeft');
        $('.encuesta-form').removeClass('displayNone');
        $('.encuesta-form').addClass('animate__backInRight');
        $('.ten_c').addClass('displayNone');
        $('.counter_number').html('');
        $('#pollForm').addClass('minHeight');
     });


    /* courtesy */
/*
    $('.courtesy_rate').click(function() { 
        $('.courtesy_rate').removeClass('animate__heartBeat');
	    var rate_courtesy = $(this).data('courtesy');
        $(document.querySelectorAll("[data-courtesy='1'],[data-courtesy='2'],[data-courtesy='3'],[data-courtesy='4'],[data-courtesy='5']")).attr("src",star_w);
        switch(rate_courtesy) {
        	case 1: $(document.querySelectorAll("[data-courtesy='1']")).attr("src", star_y);
        		$(document.querySelectorAll("[data-courtesy='1']")).addClass('animate__heartBeat'); break;
        	case 2: $(document.querySelectorAll("[data-courtesy='1'],[data-courtesy='2']")).attr("src",star_y);
        		$(document.querySelectorAll("[data-courtesy='2']")).addClass('animate__heartBeat');	break;
        	case 3: $(document.querySelectorAll("[data-courtesy='1'],[data-courtesy='2'],[data-courtesy='3']")).attr("src", star_y);
        		$(document.querySelectorAll("[data-courtesy='3']")).addClass('animate__heartBeat');	break;
        	case 4: $(document.querySelectorAll("[data-courtesy='1'],[data-courtesy='2'],[data-courtesy='3'],[data-courtesy='4']")).attr("src", star_y);
        		$(document.querySelectorAll("[data-courtesy='4']")).addClass('animate__heartBeat'); break;
        	case 5: $(document.querySelectorAll("[data-courtesy='1'],[data-courtesy='2'],[data-courtesy='3'],[data-courtesy='4'],[data-courtesy='5']")).attr("src",star_y);
        		$(document.querySelectorAll("[data-courtesy='5']")).addClass('animate__heartBeat');break;
        } 
        
        $('.cortesy_conte').addClass('animate__backOutLeft');
        $('.quality_conte').removeClass('displayNone');
        $('.quality_conte').addClass('animate__backInRight');
        $('.cortesy_conte').addClass('displayNone');

    });
*/
  

    /* quality */
    /*
    $('.quality_rate').click(function() { 
        $('.quality_rate').removeClass('animate__heartBeat');
	    var rate_quality = $(this).data('quality');
        $(document.querySelectorAll("[data-quality='1'],[data-quality='2'],[data-quality='3'],[data-quality='4'],[data-quality='5']")).attr("src",star_w);
        switch(rate_quality) {
        	case 1: $(document.querySelectorAll("[data-quality='1']")).attr("src", star_y);
        		$(document.querySelectorAll("[data-quality='1']")).addClass('animate__heartBeat'); break;
        	case 2: $(document.querySelectorAll("[data-quality='1'],[data-quality='2']")).attr("src",star_y);
        		$(document.querySelectorAll("[data-quality='2']")).addClass('animate__heartBeat');	break;
        	case 3: $(document.querySelectorAll("[data-quality='1'],[data-quality='2'],[data-quality='3']")).attr("src", star_y);
        		$(document.querySelectorAll("[data-quality='3']")).addClass('animate__heartBeat');	break;
        	case 4: $(document.querySelectorAll("[data-quality='1'],[data-quality='2'],[data-quality='3'],[data-quality='4']")).attr("src", star_y);
        		$(document.querySelectorAll("[data-quality='4']")).addClass('animate__heartBeat'); break;
        	case 5: $(document.querySelectorAll("[data-quality='1'],[data-quality='2'],[data-quality='3'],[data-quality='4'],[data-quality='5']")).attr("src",star_y);
        		$(document.querySelectorAll("[data-quality='5']")).addClass('animate__heartBeat');break;
        } 	
    });
*/

</script>  


<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.appear.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/forms.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.js"></script>