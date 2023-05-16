<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Aljibe Tango',
	'language'=>'es',
 	'sourceLanguage'=>'es',
    'charset'=>'utf-8',
 	'theme'=>'bootstrap', 

	// preloading 'log' component
	//'preload'=>array('log'),
	'preload'=>array('log','bootstrap'),  //Esto también deben de dejarlo así

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.helpers.*',
		'ext.YiiMailer.YiiMailer',
	),

	'modules'=>array(
		
		'admin',
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1234',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		),
/*
		'gii'=>array(
		 'class'=>'application.gii.GiiModule',
		 'password'=>'1234',
		 'ipFilters'=>array('127.0.0.1','::1'),
		 'generatorPaths' => array(
		 'bootstrap.gii'
		 ),
		 ),
		),*/


	// application components
	'components'=>array(
		'bootstrap' => array(
 		'class' => 'ext.bootstrap.components.Booster',
 		'responsiveCss' => true, 
 			),

		'phpThumb'=>array(
			'class'=>'ext.EPhpThumb.EPhpThumb',
			//'options'=>array(optional phpThumb specific options are added here)
		),
	
		'image'=>array(
          'class'=>'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver'=>'GD',
            // ImageMagick setup path
            'params'=>array('directory'=>'/opt/local/bin'),
        ),


    	'format' => array(
		//'datetimeFormat'=>"d M, Y h:m:s a",
    	'datetimeFormat'=>"d M, Y h:m:s a",
		'dateFormat'=>'d/m/Y',   
		),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager' => array(
			'urlFormat'=>'path',
			'showScriptName'=> false,
			'rules'=>array(
				/*
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				*/
				'admin/<controller:\w+>/<action:\w+>/<id:\d+>'=>'admin/<controller>/<action>',
				'home'=>'site/index',
				'reservas'=>'site/reservas',

				'shop/*/*'=>'site/shop',
				'shop/*'=>'site/shop',
				
				'shopdeg/*/*'=>'site/shopdeg',
				'shopdeg/*'=>'site/shopdeg',

				'shopclases/*/*'=>'site/shopclases',
				'shopclases/*'=>'site/shopclases',

				'enviarsuscripcion'=>'site/enviarsuscripcion',
				'enviarcontacto'=>'site/enviarcontacto',
				'enviarcompra'=>'site/enviarcompra',
				'linkdepago'=>'site/linkdepago',
				'agencias'=>'site/agencias',
				'enviarAgencias'=>'site/enviarAgencias',
				'corporativos'=>'site/corporativos',
				'enviarCorporativos'=>'site/enviarCorporativos',
				'terraza'=>'site/terraza',
				'cava'=>'site/cava',
				'estudio'=>'site/estudio',
				'getPagoPayPal'=>'site/getPagoPayPal',
				'getPagoPayPalOndemand'=>'site/getPagoPayPalOndemand',
				'ondemand'=>'site/ondemand',
				'ondemandPlay/*'=>'site/ondemandPlay',
				'menu'=>'site/menu',

				'show/*'=>'site/show',
				'deg'=>'site/deg',
				'clase'=>'site/clase',
				'encuesta'=>'site/encuesta',
				),
		),
		
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=aljibe',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
	
/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=opuscruceros_bd',
			'emulatePrepare' => true,
			'username' => 'opuscruceros_u',
			'password' => '20Mau14Opus',
			'charset' => 'utf8',
		),
*/		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'mauricio@pixtudios.net',
		'languages'=>array('tr'=>'Türkçe', 'en'=>'English', 'de'=>'Deutsch'),
		//'client-id-paypal' => 'AY7o8hxrqRiq3mL7v0E1V_3P0sWGlmliYlsgrNY2l1VUXXKe9tcCBAIo5PM4L3n0dU96uUH0dkNNIPva', // PAYPAL PRODUCTION laventana
		'client-id-paypal' => 'AY3mikiVpnpfcHKdKCExaDLohLLADkmlVBJtUcCVe8rRDTHCkmDwE-d7KkEjOvrx3AIKJyB9EYXuMGLE', // PAYPAL TESTING 
	),
);
