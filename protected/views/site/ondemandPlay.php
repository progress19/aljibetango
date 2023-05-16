<!-- Page Loader -->
<section id="pageloader">
  <div class="logo-loading">
    <img src="<?php echo URLRAIZ ?>/images/logo-aljibe-02.png" class="" width="" alt="" >
  </div>  
  <div class="loader"></div>
</section>

<?php require 'menu.php';?>

<!-- shop -->
<section id="reservas-int" class="container shop-int"><br>
  <div class="inner" >
    <div class="col-md-10 col-md-offset-1 fondo-shop">

      <h3 class="titulo-show-nuevo fondo-titulo-show"><?php echo Yii::t('strings','TANGO SHOW - ONDEMAND') ?></h3>

        <div id="conte-video-ondemand"></div>
        
        <div id="tiempo-disponible" style="display: none;">
          <p><?php echo Yii::t('strings','Tiempo disponible') ?>: <val></val> <?php echo Yii::t('strings','minutos.') ?></p> 
        </div>
    
    </div>
  </div>

  <div class="clearfix"></div>
  <br>
</section>

<div class="countdown"></div>

<input type="hidden" class="form-control" name="url" id="URLRAIZ" value="<?php echo URLRAIZ ?>">
<input type="hidden" class="form-control" name="msg_enviando" id="msg_enviando" value="<?php echo Yii::t('strings', '¡Gracias por disfrutar del Show!'); ?>">

<?php if (isset($_REQUEST['id'])) {
  
  $id = $_REQUEST['id'];

} else {$id='';} ?>

<script src="https://player.vimeo.com/api/player.js"></script>   

<script>

checkIdTransaction('<?php echo $id; ?>');

function checkIdTransaction(id) {
  
        var urlraiz = $('#URLRAIZ').val();
  
        $.ajax({
           url: urlraiz+"/site/checkIdTransaction",
           type: "post",
           data: "id="+id,

           success: function(data) {
           
                $('#conte-video-ondemand').html(data); //puede traer id desconocido


                if (parseInt(data) < 30) {   //recibo tiempo trasncurrido

                    tiempo_restante = 30 - parseInt(data);
                   
                    $('#conte-video-ondemand').html('<a onclick="vimeoPlay()"><img src="<?php echo URLRAIZ ?>/images/ondemand-laventana.jpg" class="img-responsive" alt="" ><img src="<?php echo URLRAIZ ?>/images/icon-play.png" class="icon-play" alt="" ></a>');

                    $('#tiempo-disponible').fadeIn();
                    $('#tiempo-disponible val').html(tiempo_restante+':00');
           
                }  else {

                    $('#conte-video-ondemand').html(data);

                }

                }
                      
              });

}

function vimeoPlay() {

  var urlraiz = $('#URLRAIZ').val();
  var id = '<?php echo $id; ?>';

  $.ajax({
    url: urlraiz+"/site/getIframeVideo",
    type: "post",
    data: "id="+id,

    success: function(data) {
      
      $('#conte-video-ondemand').html(data);

      var iframe = document.querySelector('iframe');
      var player = new Vimeo.Player(iframe);
      
      player.play().then(function() {

        $.ajax({
           url: urlraiz+"/site/startTimeVideoOndemand",
           type: "post",
           data: "id="+id,

           success: function(data) {
              

           }
        
        });

        inicioCuenta();

      })

      .catch(function(error) {
        switch (error.name) {
          case 'PasswordError':
          break;
          case 'PrivacyError':
          break;
          default:
          break;
        }
      });

    }}
    );
}

//document.getElementById("playButton").onclick = function (){vimeoPlay()}

function inicioCuenta() {
 
  var timer2 = tiempo_restante+":01";
  var interval = setInterval(function() {

    if (minutes==28) {console.log(minutes);}


  var timer = timer2.split(':');
  
  var minutes = parseInt(timer[0], 10);
  var seconds = parseInt(timer[1], 10);
  --seconds;
  
  minutes = (seconds < 0) ? --minutes : minutes;

  if (minutes < 0) {

    $('#tiempo-disponible val').html('00:00');
    
    $('#conte-video-ondemand').html('<p><?php echo Yii::t('strings', '¡Gracias por disfrutar del Show!'); ?></p>');
    clearInterval(interval);
    
  } else {

  //if (minutes < 0) clearInterval(interval);
  
  seconds = (seconds < 0) ? 59 : seconds;
  seconds = (seconds < 10) ? '0' + seconds : seconds;
  //minutes = (minutes < 10) ?  minutes : minutes;
  $('#tiempo-disponible val').html(minutes + ':' + seconds);
  timer2 = minutes + ':' + seconds;

  }
  

}, 1000);


}

</script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ondemand.js"></script>




