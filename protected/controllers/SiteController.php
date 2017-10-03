<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
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

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
 
		$this->render('index', array('url'=>Yii::app()->request->baseUrl.'/images/bosque.png'));
	}

	public function actionAbout()
	{
		$this->render('about');
	}
	
		public function actionAcercade()
	{
		$this->render('acercade');
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
			else{
				$url=Yii::app()->request->baseUrl.'/images/darkForest.jpg';
				Yii::app()->user->setFlash('error', $url);
				$this->render('error', $error);
			}
		}
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
				Yii::app()->user->setFlash('contact','Gracias por contactarse. Le responderemos a la brevedad.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
	/**
	 * Displays the register page
	 */
	public function actionRegistro(){
		$model=new Usuario;
		$model->idperfil_usuario = '4';
		$model->razon_social = 'COOPERATIVA MERCOFLOR';		
		$model->password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 );		

		//$this->performAjaxValidation($model);

		if(isset($_POST['Usuario']))
		{
			$model->username=$_POST['Usuario']['email'];
			$model->attributes=$_POST['Usuario'];
			if($model->save()){
				$user=$model->username;
				$pass=$model->password;
				$url=Yii::app()->request->baseUrl.'/images/guarda.png';
				Yii::app()->user->setFlash('success', $url);
				Yii::app()->user->setFlash('user', $user);
				Yii::app()->user->setFlash('pass', $pass);
				$this->refresh();
			}
		}

		$this->render('registro',array(
			'model'=>$model,
		));	
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
			if($model->validate() && $model->login()){
						$this->redirect(array('usuario/index'));
			}
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
		$this->redirect(Yii::app()->homeUrl);
	}
	
	/**
	 * Displays the stock of plants.
	 */
	public function actionListadoStock(){
		$model=new Ingreso;
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ingreso']))
			$model->attributes=$_GET['Ingreso'];

		$this->render('listadoStock',array(
			'model'=>$model,
		));
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