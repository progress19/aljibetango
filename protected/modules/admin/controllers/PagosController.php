<?php

class PagosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/dashboard_admin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Pagos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pagos']))
		{
			$model->attributes=$_POST['Pagos'];
			if($model->save())

		/* envio email link de pago */

		$body="
			<strong>".Yii::t('strings', 'LINK DE PAGO')." La Ventana - Tango Show</strong><br><hr>
			<b>".Yii::t('strings', 'EVENTO :')." </b>".$model->titulo."<br>
			<b>".Yii::t('strings', 'FECHA DEL SHOW :')." </b>".Yii::app()->dateFormatter->format("dd/MM/yyyy",$model->fecha)."<br>
			<b>".Yii::t('strings', 'TOTAL A PAGAR')." : </b> USD ".$model->precio."<br>
			<b>".Yii::t('strings', 'EMAIL :')." </b>".$model->email."<br>
			<b>".Yii::t('strings', 'NOMBRE')." : </b>".$model->nombre."<br>
			<b>".Yii::t('strings', 'COMENTARIOS')." : </b>".$model->comentarios."<br><br>
			<a href='http://www.laventanaweb.com/linkdepago?id=$model->idPago'><h2>PAGAR AHORA</h2></a>
			";

			$mail = new YiiMailer();
			$mail->setView('contact');
			$mail->setData(array('message' => '', 'name' => '',
				 'description' => $body));

			$mail->setFrom('info@laventanaweb.com', 'La Ventana - Tango Show');

			$mail->AddAddress($model->email);
 				
			$mail->setSubject(Yii::t('strings', 'LINK DE PAGO'). ' La Ventana - Tango Show');

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

		/* fin envio email */ 	

				$this->redirect(array('admin'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pagos']))
		{

			$model->attributes=$_POST['Pagos'];
			if($model->save())

		/* envio email link de pago */

		$body="
			<strong>".Yii::t('strings', 'LINK DE PAGO')." La Ventana - Tango Show</strong><br><hr>
			<b>".Yii::t('strings', 'EVENTO :')." </b>".$model->titulo."<br>
			<b>".Yii::t('strings', 'FECHA DEL SHOW :')." </b>".Yii::app()->dateFormatter->format("dd/MM/yyyy",$model->fecha)."<br>
			<b>".Yii::t('strings', 'TOTAL A PAGAR')." : </b> USD ".$model->precio."<br>
			<b>".Yii::t('strings', 'EMAIL :')." </b>".$model->email."<br>
			<b>".Yii::t('strings', 'NOMBRE')." : </b>".$model->nombre."<br>
			<b>".Yii::t('strings', 'COMENTARIOS')." : </b>".$model->comentarios."<br><br>
			<a href='http://www.laventanaweb.com/linkdepago?id=$model->idPago'><h2>PAGAR AHORA</h2></a>
			";

			$mail = new YiiMailer();
			$mail->setView('contact');
			$mail->setData(array('message' => '', 'name' => '',
				 'description' => $body));

			$mail->setFrom('info@laventanaweb.com', 'La Ventana - Tango Show');

			$mail->AddAddress($model->email);
 				
			$mail->setSubject(Yii::t('strings', 'LINK DE PAGO'). ' La Ventana - Tango Show');

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

		/* fin envio email */ 	
			
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pagos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pagos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pagos']))
			$model->attributes=$_GET['Pagos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pagos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pagos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pagos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pagos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
