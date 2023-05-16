<?php

class ClasesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/dashboard_admin';

	public function actions()
    {
    return array(
    'toggle' => array(
    'class'=>'booster.actions.TbToggleAction',
    'modelName' => 'Clases',
    ));
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
				'actions'=>array('index','view','toggle'),
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
		$model=new Clases;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Clases']))
		{
			$rnd = rand(10000,99999);  // Generamos un numero aleatorio entre 0-9999
			$model->attributes=$_POST['Clases'];

			$imagenFile=CUploadedFile::getInstance($model,'imagen');
            $fileName = "show_{$rnd}.jpg";  // numero aleatorio  + nombre de archivo
            $model->imagen = $fileName;
                               
            if($model->save())
            {

                if(!empty($imagenFile))  // checkeamos si el archivo subido esta seteado o no
                {
                    $imagenFile->saveAs(Yii::app()->basePath.'/../pics/clases/'.$fileName);
				    $image = Yii::app()->image->load(Yii::app()->basePath.'/../pics/clases/'.$model->imagen);
				   // $image->resize(800, 600);
				    $image->save(Yii::app()->basePath.'/../pics/clases/'.$model->imagen);  
                }
                $this->redirect(array('admin'));
            }
 
            if($model->save())
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

        if(isset($_POST['Clases']))
        {

            $_POST['Clases']['imagen'] = $model->imagen;

            $model->attributes=$_POST['Clases'];

            $subiendoImagen=CUploadedFile::getInstance($model,'imagen');
            
            if($model->save()){

                if(!empty($subiendoImagen)){
                    $subiendoImagen->saveAs(Yii::app()->basePath.'/../pics/clases/'.$model->imagen);
                    $image = Yii::app()->image->load(Yii::app()->basePath.'/../pics/clases/'.$model->imagen);
				    //$image->resize(800, 600);
				    $image->save(Yii::app()->basePath.'/../pics/clases/'.$model->imagen);  
                } 

                 $this->redirect(array('/admin/home'));  
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
		$dataProvider=new CActiveDataProvider('Clases');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Clases('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Clases']))
			$model->attributes=$_GET['Clases'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Clases the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Clases::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Clases $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='Clases-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
