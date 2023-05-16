<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionEncuesta() { $this->render('encuesta'); }

	public function actionEnviarEncuesta() {

			$encuesta = new Encuesta();
			$encuesta->nombre = $_REQUEST['nombre']; 
			$encuesta->email = $_REQUEST['email']; 
			$encuesta->idPais = $_REQUEST['idPais']; 
			$encuesta->comentarios = $_REQUEST['comentarios']; 
			$encuesta->opcion1 = $_REQUEST['one']; 
			$encuesta->opcion2 = $_REQUEST['two']; 
			$encuesta->opcion3 = $_REQUEST['three']; 
			$encuesta->opcion4 = $_REQUEST['four']; 
			$encuesta->opcion5 = $_REQUEST['five']; 
			$encuesta->opcion6 = $_REQUEST['six']; 
			$encuesta->opcion7 = $_REQUEST['seven']; 
			$encuesta->opcion8 = $_REQUEST['eight']; 
			$encuesta->opcion9 = $_REQUEST['nine']; 
			$encuesta->opcion10 = $_REQUEST['ten']; 
			$encuesta->estado = 0;
			$encuesta->save(false);

			//envio email boucher

		$body = "
		  <strong>Hi! ".$_REQUEST['nombre']."</strong><br>

		  Remember to send us this email before your next booking.<br>
		  Valid for all our products at <a href='http://www.tangoshowargentina.com'>www.tangoshowargentina.com</a> <br>

		  Thanks your for your visit.<br>

		  <hr>

			TANGO SHOW ARGENTINA <br>
			<a href='http://www.tangoshowargentina.com'>www.tangoshowargentina.com</a> <br>
			<a href='mailto:info@tangoshowargentina.com' >info@tangoshowargentina.com</a> <br>
			TEL: (+5411) 3220 3300 <br>
			Whatsapp: (+54911) 6875-9015 <br>

			";
			
			$mail = new YiiMailer();
			//$mail->setView('poll');
			$mail->setLayout('poll');
			$mail->setData(array('message' => '', 'name' => '', 'description' => $body));

			$mail->setFrom('info@aljibetango.com', 'Aljibe Tango');

			$archivo = '20%OFF-TangoShowArgentina.pdf';
    	$mail->AddAttachment($archivo,$archivo);

			$mail->AddAddress($_POST['email']);
 				
			$mail->setSubject( 'Tango Show Argentina - Congratulations 20% OFF in your next visit.' );

			$mail->smtpConnect([
			    'ssl' => [
			        'verify_peer' => false,
			        'verify_peer_name' => false,
			        'allow_self_signed' => true
			    ]
			]);

				//send
				if ($mail->send()) {
					Yii::app()->user->setFlash('contact','Gracias...');
				} else {
					//echo $arraycontacto;
					echo $mail->getError();
					Yii::app()->user->setFlash('error','Error : '.$mail->getError());
				}

	//envio email La Ventana

		$body="
		  <strong>".Yii::t('strings', 'Encuesta')." Aljibe Tango</strong><br><hr>
		
			<p>1 - Cortesía del personal: ".$_REQUEST['one']."</p>
			<p>2 - Calidad de instalaciones: ".$_REQUEST['two']."</p>
			<p>3 - Bloque de Tango: ".$_REQUEST['three']."</p>
			<p>4 - Bloque de Folclore: ".$_REQUEST['four']."</p>
			<p>5 - Vestuario: ".$_REQUEST['five']."</p>
			<p>6 - Atención del mozo: ".$_REQUEST['six']."</p>
			<p>7 - Temperatura y presentación de la comida: ".$_REQUEST['seven']."</p>
			<p>8 - Sabor de la comida: ".$_REQUEST['eight']."</p>
			<p>9 - Calidad del vino: ".$_REQUEST['nine']."</p>
			<p>10 - Transporte: ".$_REQUEST['ten']."</p><br>
			<p>--------------</p>
			Nombre: ".$_REQUEST['nombre']."<br>
			Email: ".$_REQUEST['email']."<br>
			País: ".Paises::getPaisNombre($_REQUEST['idPais'])."<br>
			Comentarios : ".$_REQUEST['comentarios']."<br>";
			
			$mail = new YiiMailer();
			$mail->setLayout('poll');
			$mail->setData(array('message' => '', 'name' => '', 'description' => $body));

			$mail->setFrom('info@aljibetango.com', 'Aljibe Tango');

			$mail->AddAddress( 'tony.pero@laventanaweb.com' );
			//$mail->AddAddress( 'mauriciolav@gmail.com' );
 				
			$mail->setSubject( 'Tango Show Argentina - Encuesta' );

			$mail->smtpConnect([
			    'ssl' => [
			        'verify_peer' => false,
			        'verify_peer_name' => false,
			        'allow_self_signed' => true
			    ]
			]);

				//send
				if ($mail->send()) {
					Yii::app()->user->setFlash('contact','Gracias...');
				} else {
					//echo $arraycontacto;
					echo $mail->getError();
					Yii::app()->user->setFlash('error','Error : '.$mail->getError());
				}
			
	}

	public function actionGetPollLg() {
		
		switch ($_REQUEST['lg']) {
			
			case 'es':
				Yii::app()->setLanguage('es'); break;
			
			case 'en':
				Yii::app()->setLanguage('en'); break;
				
			case 'pr':
				Yii::app()->setLanguage('pt'); break;	
		}

		$this->renderPartial('_pollForm');

	}

	public function actionRedimensionar($alto=235)	{
		Yii::import('application.extensions.image.Image');
		$image = new Image(Yii::app()->basePath.'/images/1.jpg');
		$image->resize(NULL, 235);
		$image->crop(235, 235);
		$image->render();
	}

	public function actionMaxresi($imagen,$alto,$ancho) {

		  $thumb=Yii::app()->phpThumb->create($imagen);
			$thumb->adaptiveResize($ancho, $alto);
			$thumb->show();

	}

	public function actionShow() {

		$show = Shows::getShow( $_REQUEST['id'] );
		$this->render('show', array('show' => $show));

	}

	public function actionDeg() {
		$cava = Cava::model()->findByPK(9999);
		$this->render('deg', array('cava' => $cava));
	}

	public function actionClase() {
		$clase = Clases::model()->findByPK(9998);
		$this->render('clase', array('clase' => $clase));
	}

	public function actionMenu(){
		$this->render('menu');
	}

	public function actionIndex()	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		setLanguage();
		
		$shows = Shows::getShows();
		$shows_especial = Shows::getShowsEspeciales();
		$cavas = Cava::getCavas();
		$clases = Clases::getClases();
		$imagenes = Imagenes::getImagenes();
		$menus = Menus::getMenus();

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
              case "zh": $file = 'Menu-ch.pdf';
                  break;
          }

		//print_r($imagenes); die();

		$this->render('index', array(
			'shows' => $shows,
			'shows_especial' => $shows_especial,
			'cavas' => $cavas,
			'clases' => $clases,
			'imagenes' => $imagenes,
			'file' => $file,
			'menus' => $menus,
			));

		}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
    * Displays the home page
	*/

	public function actionReservas(){

			$shows_promos = Shows::getShowsPromos();
	  		$shows = Shows::getShows();
	  		$cavas = Cava::getCavas();
	  		$clases = Clases::getClases();
	  		$shows_especial = Shows::getShowsEspeciales();

		$this->render('reservas',
		 array(
			'shows_promos'=>$shows_promos,
			'shows'=>$shows,
			'cavas'=>$cavas,
			'clases'=>$clases,
			'shows_especial'=>$shows_especial,
			)
		 );

	}

	public function actionShop() {

		$url = "$_SERVER[REQUEST_URI]";
		$partes = explode("/", $url);
		$lang = array_reverse($partes);

		switch ($lang[0]) {
			
			case 'es':
				Yii::app()->setLanguage('es');
				break;

			case 'en':
				Yii::app()->setLanguage('en');
				break;
				
			case 'pt':
				Yii::app()->setLanguage('pt');
				break;	
			
			case 'zh':
				Yii::app()->setLanguage('zh');
				break;	

			default:
				break;

		}

		//echo $_REQUEST['id']; die();

		$show = Shows::getShow($_REQUEST['id']);
		$this->render('shop', array('show'=>$show));
		
	}

	public function actionShopclases(){
		
		$url = "$_SERVER[REQUEST_URI]";
		$partes = explode("/", $url);
		$lang = array_reverse($partes);

		switch ($lang[0]) {
			
			case 'es':
				Yii::app()->setLanguage('es');
				break;

			case 'en':
				Yii::app()->setLanguage('en');
				break;
				
			case 'pt':
				Yii::app()->setLanguage('pt');
				break;	
			
			case 'zh':
				Yii::app()->setLanguage('zh');
				break;	

			default:
				break;

		}

		$clase = Clases::getClase($_REQUEST['id']);
		$this->render('shopclases', array('clase'=>$clase));

	}

	public function actionShopdeg(){

		$url = "$_SERVER[REQUEST_URI]";
		$partes = explode("/", $url);
		$lang = array_reverse($partes);

		switch ($lang[0]) {
			
			case 'es':
				Yii::app()->setLanguage('es');
				break;

			case 'en':
				Yii::app()->setLanguage('en');
				break;
				
			case 'pt':
				Yii::app()->setLanguage('pt');
				break;	
			
			case 'zh':
				Yii::app()->setLanguage('zh');
				break;	

			default:
				break;

		}

		$cava = Cava::getCava($_REQUEST['id']);
		$this->render('shopdeg', array('cava'=>$cava));
		
	}

	public function actionComprarFin(){$this->render('comprarFin');}
	public function actionPagosFin(){$this->render('pagosFin');}
	public function actionLinkdepago(){$this->render('linkdepago');}
	public function actionAgencias(){$this->renderPartial('agencias');}
	public function actionCorporativos(){$this->renderPartial('corporativos');}

	public function actionPaypal_ipn(){$this->renderPartial('paypal_ipn');}

	public function actionTerraza(){
		
		$terraza = Servicios::model()->findByPk(1);

	     switch (Yii::app()->getLanguage()) {
	          case "es": $descripcion = $terraza->des_es;
	              break;
	          case "en":
	              $descripcion = $terraza->des_en;
	              if ($descripcion=='') {$descripcion = $terraza->des_es;}
	              break;
	          case "pt":
	              $descripcion = $terraza->des_pr;
	              if ($descripcion=='') {$descripcion = $terraza->des_es;}
	              break;
	         case "zh":
	              $descripcion = $terraza->des_zh;
	              if ($descripcion=='') {$descripcion = $terraza->des_es;}
	              break;
	      }
		
		$this->render('terraza', array('descripcion'=>$descripcion));

	}

	public function actionCava(){

		$cava = Servicios::model()->findByPk(2);

		switch (Yii::app()->getLanguage()) {
	          case "es": $descripcion = $cava->des_es;
	              break;
	          case "en":
	              $descripcion = $cava->des_en;
	              if ($descripcion=='') {$descripcion = $cava->des_es;}
	              break;
	          case "pt":
	              $descripcion = $cava->des_pr;
	              if ($descripcion=='') {$descripcion = $cava->des_es;}
	              break;
	         case "zh":
	              $descripcion = $cava->des_zh;
	              if ($descripcion=='') {$descripcion = $cava->des_es;}
	              break;
	      }
		
		$this->render('cava', array('descripcion'=>$descripcion));

	}

	public function actionEstudio(){

		$estudio = Servicios::model()->findByPk(3);

		switch (Yii::app()->getLanguage()) {
	          case "es": $descripcion = $estudio->des_es;
	              break;
	          case "en":
	              $descripcion = $estudio->des_en;
	              if ($descripcion=='') {$descripcion = $estudio->des_es;}
	              break;
	          case "pt":
	              $descripcion = $estudio->des_pr;
	              if ($descripcion=='') {$descripcion = $estudio->des_es;}
	              break;
	         case "zh":
	              $descripcion = $estudio->des_zh;
	              if ($descripcion=='') {$descripcion = $estudio->des_es;}
	              break;
	      }

		$this->render('estudio', array('descripcion'=>$descripcion));

	}

	public function actionEnviarcontacto()
	{
		
		sleep(2);		
		$config = Config::model()->findByPK(1);

		if(isset($_POST['email']))
		{

		if ($_POST['suscribir']=='checked') {
		 	$suscribir = Yii::t('strings','SI');
			$newsletter = new Newsletter();
			$newsletter->email = $_POST['email'];
			$newsletter->estado = 1;
			$newsletter->save(false);
		 } else {
		 	$suscribir = Yii::t('strings','NO');
		 } 

		$body="
		    <strong>".Yii::t('strings', 'Contacto desde')." Aljibe Tango</strong><br><hr>
			<b>".Yii::t('strings', 'NOMBRE').": </b>".$_REQUEST['nombre']."<br>
			<b>".Yii::t('strings', 'APELLIDO').": </b>".$_REQUEST['apellido']."<br>
			<b>".Yii::t('strings', 'EMAIL').": </b>".$_REQUEST['email']."<br>
			<b>".Yii::t('strings', 'TELEFONO').": </b>".$_REQUEST['telefono']."<br>
			<b>".Yii::t('strings', 'PAIS').": </b>".$_REQUEST['pais']."<br>
			<b>".Yii::t('strings', 'COMENTARIO').": </b>".$_REQUEST['comentario']."<br>";

			$mail = new YiiMailer();
			$mail->setView('contact');
			$mail->setData(array('message' => '', 'name' => '',
				 'description' => $body));

			$mail->setFrom('info@aljibetango.com', 'Aljibe Tango');

			$mail->AddAddress($_POST['email']);

			$contactos = explode(";",$config->contacto);
			 foreach ($contactos as $contacto) {
			 	$mail->AddAddress($contacto);
			 }
 				
				$mail->setSubject(Yii::t('strings', 'CONTACTO'). ' Aljibe Tango');

				$mail->smtpConnect([
				    'ssl' => [
				        'verify_peer' => false,
				        'verify_peer_name' => false,
				        'allow_self_signed' => true
				    ]
				]);

				//send
				if ($mail->send()) {
					Yii::app()->user->setFlash('contact','Gracias...');
				} else {
					echo $arraycontacto;
					echo $mail->getError();
					Yii::app()->user->setFlash('error','Error : '.$mail->getError());
				}
				
				$this->refresh();

		}
	}

	public function actionEnviarsuscripcion()	{

		sleep(1);
		$model=new Newsletter;

		if(isset($_POST['email']))
		{
			$model->email=$_POST['email'];
			$model->estado=1;
			if($model->save(false))
				$mail = new YiiMailer();
				$mail->setView('contact');
				$mail->setData(array('message' => '', 'name' => '',
				 'description' => Yii::t('strings','Gracias por suscribirse.')));

				$mail->setFrom('info@aljibetango.com', 'Aljibe Tango');
			
				$mail->setTo($_POST['email']);
				$mail->setSubject(Yii::t('strings','Aljibe Tango'));

				$mail->smtpConnect([
				    'ssl' => [
				        'verify_peer' => false,
				        'verify_peer_name' => false,
				        'allow_self_signed' => true
				    ]
				]);

				//send
				if ($mail->send()) {
					Yii::app()->user->setFlash('contact','Gracias...');
				} else {
					//echo $arraycontacto;
					echo $mail->getError();
					Yii::app()->user->setFlash('error','Error : '.$mail->getError());
				}
				
				$this->refresh();

		}
	}



	public function actionCalculodegustacion() {

		$valor = $_REQUEST['valor'];

		// 2 a 4
		// 5 a 15
		// mas de 16

		$precios = Cava::model()->findByPK(9999);

		$precio = 99999;

		if ($valor >= 2 AND $valor <=4) {
			$precio = $precios['precio2_4'];
		} 
		if ($valor >= 5 AND $valor <=15) {
			$precio = $precios['precio5_15'];
		} 
		if ($valor >= 16) {
			$precio = $precios['precio16'];
		} 
		
		echo $precio;

	}


		public function actionCalculoclases() {

		$valor = $_REQUEST['valor'];

/*
precio1
precio2
precio3_6
precio7_10
precio11_19
*/

		$precios = Clases::model()->findByPK(9998);

		$precio = 99999;

		if ($valor == 1) {
			$precio = $precios['precio1'];
		} 
		if ($valor == 2) {
			$precio = $precios['precio2'];
		} 
		if ($valor >= 3 AND $valor <=6) {
			$precio = $precios['precio3_6'];
		} 
		if ($valor >= 7 AND $valor <=10) {
			$precio = $precios['precio7_10'];
		} 
		if ($valor >= 11 AND $valor <= 19) {
			$precio = $precios['precio11_19'];
		} 
		
		if ($valor >= 20) {
			$precio = $precios['precio20'];
		} 
		
		echo $precio;

	}

	
	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
		    	$this->redirect(Yii::app()->homeUrl.'admin/home');
		 
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		//$this->redirect(Yii::app()->homeUrl);
		$this->redirect(Yii::app()->homeUrl.'site/login');
	}

					
	public function actionGetPagoPayPal() {

			
		//print_r($_REQUEST); die();

		//sleep(3);

			if ($_REQUEST['orderId']) {

				/*
				$fecha = '';
				$fecha = CDateTimeParser::parse(date("d/m/Y"),'dd/MM/yyyy');
				*/

				$fechaShow = '';
				$fechaShow = CDateTimeParser::parse($_POST['fecha'],'dd/MM/yyyy');

				$reserva = new Reservas();

				$reserva->orderId = $_POST['orderId'];
				$reserva->orderStatus = $_POST['orderStatus'];
				$reserva->payerId = $_POST['payerId'];
				$reserva->payerEmail = $_POST['payerEmail'];
				$reserva->payerCountry = $_POST['payerCountry'];
				$reserva->payerName = $_POST['payerName'];
				$reserva->paymentAmount = $_POST['paymentAmount'];
				$reserva->paymentReference = $_POST['paymentReference'];
				$reserva->fechaReserva = $fechaShow;
				$reserva->cantidadPasajeros = $_POST['cantidadPasajeros'];
				$reserva->nombre = $_POST['nombre'];
				$reserva->email = $_POST['email'];
				$reserva->idHotel = $_POST['hotel'];
				$reserva->hotelOther = $_POST['hotelOther'];
				$reserva->fechaReg = date('Y-m-d H:i:s');
				$reserva->tipo = $_POST['tipo'];

				//$reserva-> = $_POST[''];

				$reserva->save(false);

					if ( $_REQUEST['orderStatus']='COMPLETED' ) {

						$show = Shows::getShow( $_POST['paymentReference'] );

						$producto = $show->titulo_es;
						$importe = $show->precio;
											
						$mail = new YiiMailer();
						$mail->setLayout('reserva');
						
						$mail->setData( array(
							'nombre' => $_POST['nombre'],
							'fecha' => $_POST['fecha'],
							'producto' => $producto,
							'pasajeros' => $_POST['cantidadPasajeros'],
							'importe' => $_POST['paymentAmount'],
						));

						$mail->setFrom('info@aljibetango.com', 'Aljibe tango');

						$mail->AddAddress($_POST['email']);
			 				
						$mail->setSubject( 'Aljibe tango - '.Yii::t('strings', 'Reserva').' Nº: '.$_POST['orderId'] );

						$mail->smtpConnect([
						    'ssl' => [
						        'verify_peer' => false,
						        'verify_peer_name' => false,
						        'allow_self_signed' => true
						    ]
						]);

						//send
						if ($mail->send()) { 
							Yii::app()->user->setFlash('contact','Gracias...');
						} else {
							//echo $arraycontacto;
							echo $mail->getError();
							Yii::app()->user->setFlash('error','Error : '.$mail->getError());
						}

					}

			}		
}

		public function actionGetPagoPayPalOndemand() {

		if (isset($_REQUEST['id'])) {
			
			$ondemand = new Ondemand();
			
			$ondemand->orderId = $_POST['id'];
			$ondemand->orderStatus = $_POST['orderStatus'];
			$ondemand->payerId = $_POST['payerId'];
			$ondemand->payerEmail = $_POST['payerEmail'];
			$ondemand->payerCountry = $_POST['payerCountry'];
			$ondemand->payerName = $_POST['payerName'];
			$ondemand->paymentAmount = $_POST['paymentAmount'];
			$ondemand->paymentReference = $_POST['paymentReference'];
			$ondemand->fechaReg = date('Y-m-d H:i:s');
			$ondemand->fechaPlay = date('Y-m-d H:i:s');
	
			$ondemand->save(false);

			/*envio email link*/

		sleep(0);		
		$config = Config::model()->findByPK(1);

		if(isset($_POST['payerEmail']))	{

		$body = "
		    <strong>".Yii::t('strings', 'Video On demand')." Aljibe - Tango Show</strong><br>

		    <hr>

			".Yii::t('strings', 'Gracias, a continuación le enviamos el link del video...')." <br><br>
			
<a href='https://aljibetango.com.com/ondemandPlay/".$_POST['orderId']."'>https://aljibetango.com.com/ondemandPlay/".$_POST['orderId']."</a></br><br>

<p>".Yii::t('strings', 'Términos y Condiciones')."</p>

<p>".Yii::t('strings', 'Una vez procesado el pago se le enviará a su email un link para disfrutar del Show de Tango de Aljibe desde su hogar. El video estará disponible por 30 minutos una vez que haga clic en el mismo. Recuerde que si comparte el link o el correo electrónico, automáticamente se anulará el mismo por seguridad y deberá volver a generarlo. Esta prohibida la copia, venta y reproducción en otros medios que no sea aljibetango.com bajo los derechos de autor y propiedad de La Ventana SRL.')."</p>
";
			
			$mail = new YiiMailer();
			$mail->setView('contact');
			$mail->setData(array('message' => '', 'name' => '',
				 'description' => $body));

			$mail->setFrom('info@aljibetango.com.com', 'Aljibe - Tango Show');

			$mail->AddAddress($_POST['payerEmail']);
 				
			$mail->setSubject(Yii::t('strings', 'ONDEMAND'). ' Aljibe - Tango Show');

			$mail->smtpConnect([
			    'ssl' => [
			        'verify_peer' => false,
			        'verify_peer_name' => false,
			        'allow_self_signed' => true
			    ]
			]);

				//send
				if ($mail->send()) {
					Yii::app()->user->setFlash('contact','Gracias...');
				} else {
					echo $arraycontacto;
					echo $mail->getError();
					Yii::app()->user->setFlash('error','Error : '.$mail->getError());
				}
				
				$this->refresh();

		}}		

	}

	public function actionOndemand() {$this->render('ondemand');}

	public function actionOndemandPlay() {$this->render('ondemandPlay');}

	public function actionCheckIdTransaction() {

		//chequeo si existe orderId
		$ondemand = Ondemand::model()->findByAttributes(array('orderId' => $_REQUEST['id']));

		if ($ondemand) { //si lo encontró

			if ($ondemand->estado==1) { //ya lo inicio alguna vez ?
				
				//chequeo tiempo disponible
				$start_date = new DateTime($ondemand->fechaPlay);
				$since_start = $start_date->diff(new DateTime("now"));

				if ($since_start->days==0 AND $since_start->h==0 AND $since_start->i<30) {
					
					echo $since_start->i; //le mando el ok y despues con otro ajax pido video y ejecuto reloj

				} else { //tiempo exedido 

					//echo $ondemand->fechaPlay.'<br>';
					//echo date('Y-m-d H:i').'<br>';
					//echo $since_start->days.'-'.$since_start->h.'-'.$since_start->i.'<br>';
					//echo 'tiempo excedido';
					
					echo '<p>'.Yii::t('strings', 'Tiempo excedido').'</p>';					

				}
	

			} else { //no inicio video nunca $ondemand->estado==0

				echo 0;

			} 


		} else { //no encontro
			
				echo '<p>'.Yii::t('strings', 'ERROR! orderId desconocido.').'</p>';

			}

	}

	public function actionGetIframeVideo() {

		echo '<div style="padding:56.25% 0 0 0;position:relative;">
			            <iframe src="https://player.vimeo.com/video/442866441?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
			            </iframe>
			          </div>'; 

	}


	public function actionStartTimeVideoOndemand() {

		$ondemand = Ondemand::model()->findByAttributes(array('orderId' => $_REQUEST['id']));
			
			if ($ondemand->estado==0) { //0 ingresa por primera vez
				$ondemand->fechaPlay = date('Y-m-d H:i:s');	
				$ondemand->estado = 1;
			}
				
			$ondemand->save(false);

				//chequeo tiempo disponible
				$start_date = new DateTime($ondemand->fechaPlay);
				$since_start = $start_date->diff(new DateTime("now"));

				echo 30-$since_start->i;

			//echo $ondemand->fechaPlay;

	}
	
}