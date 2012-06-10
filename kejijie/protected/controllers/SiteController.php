<?php

class SiteController extends Controller
{
	public $layout= "main";
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
		$cilentScript = Yii::app()->clientScript;
		$script = <<<EOD
		$('#foo0').carouFredSel({scroll:{'pauseOnHover': true,items:1},items:5});
EOD;
		$cilentScript->registerScript('index',$script);
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

	public function actionAbout()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/about.css');
		$about = Post::model()->find(array('condition'=>'category_id = 1','order'=>'id desc'));
		$this->render('about',array('about'=>$about));
	}

	public function actionRequire()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$this->render('require');
	}

	public function actionCompany()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$this->render('company');
	}
	public function actionResult()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$this->render('result');
	}

	public function actionProfessor()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/professor.css');
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$this->render('professor');
	}

	public function actionProintro()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/professor.css');
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$this->render('prointro');
	}
}