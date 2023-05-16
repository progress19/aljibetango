<?php $this->layout=''; ?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700|Google+Sans+Text:400">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/poll.css" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>ALJIBE TANGO - Tango Show - Show de Tango - Buenos Aires Tango Show - Argentina Tango Show - Tango - San Telmo Tango Show - Show Folklore - Show de Boleadoras - Aljibe Tango Folclore - Tango Clases - Clases de Tango</title>
    <meta name="description" content="" />

</head>
<body>


<div class="f">
    
    <div class="poll">

        <div id="conte-poll" class="animate__animated animate__flipInY">

            <div class="col-md-12 logo">
                <img src="<?php echo URLRAIZ.'/images/logo-aljibe-02.png' ?>" alt="logo" />
            </div>

            <div class="clearfix"></div>

            <div id="conte-buttom" class="animate__animated">
                
                <a href="#" class="buttom_rate" data-lg="en">RATE OUR SERVICES</a>
               <p>Complete the survey and get a discount voucher for your next visit by email.</p>

                <a href="#" class="buttom_rate" data-lg="es">CALIFICA NUESTROS SERVICIOS</a>
                <p>Completá la encuesta y obtén un voucher de descuento para tu próxima visita por email.</p> 

                <a href="#" class="buttom_rate" data-lg="pr">AVALIE NOSSOS SERVIÇOS</a>
                <p>Preencha a pesquisa e receba um voucher de desconto para sua próxima visita por e-mail.</p>

            </div>   
                           
        </div>

        <div id="pollForm" class="animate__animated displayNone"></div> 

    </div>

</div>

<script>
    
    $('.buttom_rate').click(function() { 

        $('#conte-poll').addClass('animate__flipOutY displayNone');     

        var lg = $(this).data('lg');

        $.ajax({
            url: "site/getPollLg",
            type: "post",
            data: "lg="+lg,

           success: function(data) {
                
                $('#pollForm').removeClass('displayNone'); 
                $('#pollForm').addClass('animate__flipInY'); 

                $('#pollForm').html(data);
           
            }

        });

        });

</script>                           

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/forms.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.js"></script>
<script src="https://kit.fontawesome.com/7bf2bb160b.js" crossorigin="anonymous"></script>

</body>
</html>

