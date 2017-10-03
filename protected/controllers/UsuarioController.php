<?php

class UsuarioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
	
	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
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
			array('allow', 
				'actions'=>array('index','view','estadisticas','graficos'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' actions
				'actions'=>array('admin', 'create','update','delete','gestion'),
				'users'=>array('admin'),
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
		$model=new Usuario;
		$ayudante1=new Ayudante;
		$ayudante2=new Ayudante;
		$model->password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 );
		$socio=$model->getMaxSocio()+1;
		
		if(!empty($_POST)){
			$cantidad=$_POST['cant'];
			$model->username=$_POST['Usuario']['email'];
			$model->attributes=$_POST['Usuario'];
			$valid=$model->validate();
			if($cantidad==1){
				$ayudante1->attributes=$_POST['Ayudante'][1];		
			// Validamos el modelo
				$valid=$ayudante1->validate() && $valid;
			}
			if($cantidad==2){
				$ayudante1->attributes=$_POST['Ayudante'][1];
				$ayudante2->attributes=$_POST['Ayudante'][2];
						
			// Validamos los modelos
				$valid=$ayudante1->validate() && $valid;
				$valid=$ayudante2->validate() && $valid;
			}
			
			if($valid){
				if($model->save(false)){
					if($cantidad==1){
						$ayudante1->idusuario_ayudante=$model->idusuario;
						if($ayudante1->idusuario_ayudante != '' && $ayudante1->nomyape != '')
							$ayudante1->save(false);
					}
					if ($cantidad==2){
						$ayudante1->idusuario_ayudante=$model->idusuario;
						$ayudante2->idusuario_ayudante=$model->idusuario;
						if($ayudante1->idusuario_ayudante != '' && $ayudante1->nomyape != '')
							$ayudante1->save(false);
						if($ayudante2->idusuario_ayudante != '' && $ayudante2->nomyape != '')
							$ayudante2->save(false);
					}
					$url=Yii::app()->request->baseUrl.'/images/guarda.png';
					Yii::app()->user->setFlash('exito', $url);
					$this->refresh();
				}
			}
		}
		$this->render('create',array(
			'model'=>$model, 'numSocio'=>$socio, 'ayudante1'=>$ayudante1, 'ayudante2'=>$ayudante2,
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

		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			if($model->save()){
				$url=Yii::app()->request->baseUrl.'/images/change.png';
				Yii::app()->user->setFlash('exito', $url);
				$this->refresh();
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
		//$this->loadModel($id)->delete();
		
		//HACEMOS UNA BAJA LOGICA
		
		$model=$this->loadModel($id);
		$model->activo=0;
		$model->save();
		
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionIndex()
	{
		if(Yii::app()->user->isAdmin())
			$url=Yii::app()->request->baseUrl.'/images/admin.png';
		else
			$url=Yii::app()->request->baseUrl.'/images/user.png';
		
		$dataProvider=new CActiveDataProvider('Usuario');
		$this->render('index', array(
			'dataProvider'=>$dataProvider,
			'url'=>$url,
		));
	}

	public function actionAdmin()
	{
		$model=new Usuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Usuario']))
			$model->attributes=$_GET['Usuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Usuario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Usuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionEstadisticas(){
		$model=new EstadisticasForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['EstadisticasForm']))
		{
			$model->attributes=$_POST['EstadisticasForm'];
			if($model->validate()){
					//if (!Yii::app()->user->isGuest())
						$this->redirect(array('usuario/graficos', 'desde'=>$model->fechaDesde, 'hasta'=>$model->fechaHasta));
			}
		}
	
		$this->render('estadisticas', array('model'=>$model));

	}	
	
	public function actionGraficos(){
		$model=new EstadisticasForm;
		$desde = $_GET['desde'];
		$hasta = $_GET['hasta'];
		$vtasSoc = $model->getVentasPorSocio($desde, $hasta);
		$vtasEsp = $model->getVentasPorEsp($desde, $hasta);
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['EstadisticasForm']))
		{
			$model->attributes=$_POST['EstadisticasForm'];
			if($model->validate()){
					//if (!Yii::app()->user->isGuest())
						$this->redirect(array('usuario/graficos'));
			}
		}
	
		$this->render('graficos', array('model'=>$model,'vtasSoc'=>$vtasSoc, 'vtasEsp'=> $vtasEsp));

	}
	
	/**
	 * Performs the AJAX validation.
	 * @param Usuario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}