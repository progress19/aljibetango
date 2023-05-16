<?php

class ClientesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/dashboard';

	public function actions()
    {
    return array(
    'toggle' => array(
    'class'=>'booster.actions.TbToggleAction',
    'modelName' => 'Clientes',
    )
    );
    }

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
				'actions'=>array('create','update','toggle'),
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
		$model=new Clientes;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Clientes']))
		{
			$rnd = rand(10000,99999);  // Generamos un numero aleatorio entre 0-9999
			$model->attributes=$_POST['Clientes'];

			$uploadedFile=CUploadedFile::getInstance($model,'logo');
            if($uploadedFile)
            {
	            $fileName = "{$rnd}.jpg";  // numero aleatorio  + nombre de archivo
	            $model->logo = $fileName;
            }

            if($model->save())
            {
                if(!empty($uploadedFile))  // checkeamos si el archivo subido esta seteado o no
                {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../../pics/clientes/'.$fileName);
				    $image = Yii::app()->image->load(Yii::app()->basePath.'/../../pics/clientes/'.$model->logo);
				   // $image->resize(800, 600);
				    $image->save(Yii::app()->basePath.'/../../pics/clientes/'.$model->logo);  
                }
 				$this->redirect(array('clientes/admin'));        
            }
 
            if($model->save())
 				$this->redirect(array('clientes/admin'));        
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

        if(isset($_POST['Clientes']))
        {
            $rnd = rand(10000,99999);  // Generamos un numero aleatorio entre 0-9999
            $_POST['Clientes']['logo'] = $model->logo;
           // print_r($_POST['Promos']);die;
            $model->attributes=$_POST['Clientes'];

            $subiendoImagen=CUploadedFile::getInstance($model,'logo');
            if($subiendoImagen)
            {// print_r($_POST['Promos']);die;
	            $fileName = "{$rnd}.jpg";  // numero aleatorio  + nombre de archivo
	            $model->logo = $fileName;
            }

            if($model->save()){

                if(!empty($subiendoImagen))
                {
                    $subiendoImagen->saveAs(Yii::app()->basePath.'/../../pics/clientes/'.$fileName);
                    $image = Yii::app()->image->load(Yii::app()->basePath.'/../../pics/clientes/'.$model->logo);
				 //   $image->resize(1600, 470);
                  //  $image->crop(1500, 470);
				    $image->save(Yii::app()->basePath.'/../../pics/clientes/'.$model->logo);  

                } 
 				$this->redirect(array('clientes/admin'));       
            }
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
		$dataProvider=new CActiveDataProvider('Clientes');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Clientes('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Clientes']))
			$model->attributes=$_GET['Clientes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Clientes the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Clientes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Clientes $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='clientes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
