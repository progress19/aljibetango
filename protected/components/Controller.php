<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{

	public function init()
	{
	    Yii::import('ext.LangPick.ELangPick'); 
	    ELangPick::setLanguage();
	    parent::init();
	}
	
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/dashboard';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public $titulo;

	/* activar menus */
	public $bot_home;
	public $bot_empresa;
	public $bot_productos;
	public $bot_contacto;

	/* activar menus admin */
	public $menu_home;
	public $menu_ventas;
	public $menu_ondemand;
	public $menu_clientes;
	public $menu_shows;public $menu_shows_n;public $menu_shows_l;
	public $menu_showsp;public $menu_showsp_n;public $menu_showsp_l;
	public $menu_imagenes;public $menu_imagenes_n;public $menu_imagenes_l;
	public $menu_menus;public $menu_menus_n;public $menu_menus_l;
	public $menu_usuarios;public $menu_usuarios_n;public $menu_usuarios_l;
	public $menu_portada;public $menu_portada_n;public $menu_portada_l;
	public $menu_pagos;public $menu_pagos_n;public $menu_pagos_l;
	public $menu_encuestas;
	public $menu_encuestaagencialistado; public $menu_encuestaagenciagrafico;
	public $menu_encuestacorpolistado; public $menu_encuestacorpografico;
	public $menu_suscripciones;
	public $menu_traducciones;
	public $menu_configuracion;
	public $menu_cava;
	public $menu_clases;
	public $menu_servicios; public $menu_servicios_terraza; public $menu_servicios_cava; public $menu_servicios_escuela;
	
	}

	define("URLRAIZ", Yii::app()->request->baseUrl);

	function recortar_texto($texto, $limite=100, $puntos='...'){  
    $texto = trim($texto);
    $texto = strip_tags($texto);
    $tamano = strlen($texto);
    $resultado = '';
    if($tamano <= $limite){
        return $texto;
    }else{
        $texto = substr($texto, 0, $limite);
        $palabras = explode(' ', $texto);
        $resultado = implode(' ', $palabras);
        $resultado .= $puntos;
    }  
    return $resultado;
}


function urls_amigables($s) {
    $p = array('´','+','*','$','%','ú','á','Á',':','/','É','Í','Ó','Ú','é','ñ','Ñ','í','ó',' 1',' 2',' 3',' 4',' 5',' 6',' 7',' 8',' 9',' 0',' - ',' ','#','(',')','[',']','.','<','>','{','}','?','¿','!','¡','&',"'",'"',',');
    
    $r = array('-','-','-','','porciento','u','a','A','','-','e','i','o','u','e','n','n','i','o','1','2','3','4','5','6','7','8','9','0','-','-','','','','','','','','','','','','','','','y','','','');
    
    $s=str_replace($p, $r, $s);
    $s = strtolower($s);
    return $s;
}

	function actionCalculodegustacionMail($valor) {

		//$valor = $_REQUEST['valor'];

		// 2 a 4
		// 5 a 15
		// mas de 16

		$precios = Cava::model()->findByPK(9999);

		$precio = $valor;

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

function setLanguage() {

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
}



