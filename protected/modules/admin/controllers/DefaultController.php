<?php

class DefaultController extends Controller
{

	public $layout='//layouts/dashboardAAA';

	public function actionIndex() {$this->render('index');}


}