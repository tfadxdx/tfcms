<?php

class AdminController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
        public $layout='//layouts/admin/column1';

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
		$this->render('index');
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
				$this->redirect(Yii::app()->user->returnUrl);
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

        public function actionNode()
	{
                if ($_GET['action'] == 'add'){
                    $model=new Node;

                    // Uncomment the following line if AJAX validation is needed
                    // $this->performAjaxValidation($model);

                    if(isset($_POST['Node']))
                    {
                            $model->createtime=time();
                            $model->updatetime=time();
                            $model->uid=Yii::app()->getModule('user')->user()->id;
                            $model->type='node';
                            $model->attributes=$_POST['Node'];
                            if($model->save())
                                    $this->redirect(array('view','id'=>$model->id));
                    }

                    $this->render('create',array(
                            'model'=>$model,
                    ));
                } else {
                    $model=Node::model()->findAll();
                    $this->render('node',array(
                            'model'=>$model,
                    ));
                }

		
	}
}