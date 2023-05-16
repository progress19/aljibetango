<?php

class EncuestasController extends Controller {

	public $layout='//layouts/dashboard_admin';

	public function actionAgencias_est(){$this->render('agencias_est');}
	public function actionCorporativos_est(){$this->render('corporativos_est');}

	public function actionFiltrarEncuesta(){
		 return $this->renderPartial('_agencias_res');
	}

	public function actionFiltrarEncuestaCorpo(){
		 return $this->renderPartial('_corpo_res');
	}

}