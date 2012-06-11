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
		$requires = ComRequire::model()->findAll(array('order'=>'id desc','limit'=>7));
		$this->render('index',array('requires'=>$requires));
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

	public function actionCompany($id)
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$company = Company::model()->findByPk($id);
		$this->render('company',array('company'=>$company));
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
		$professors = Professor::model()->findAll();
		$this->render('professor',array('professors'=>$professors));
	}

	public function actionProintro($id)
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/professor.css');
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$prointro = Professor::model()->findByPk($id);
		$this->render('prointro',array('prointro'=>$prointro));
	}

	public function actionComlist()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/company.css');
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$sorts = Sort::model()->findAll();
		$this->render('comlist',array('sorts'=>$sorts));
	}

	public function actionCompanys($id)
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/company.css');
		$sort = Sort::model()->findByPk($id);
		$this->render('companys',array('sort'=>$sort));
	}

	public function actionVideo()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/index.css');
		$this->loadPrettyPhoto();
			
		$videos = Video::model()->findAll();
		$this->render('video',array('videos'=>$videos));
	}

	protected function loadPrettyPhoto()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/prettyPhoto.css');
		Yii::app()->clientScript->registerScriptFile(
			Yii::app()->baseUrl.'/js/jquery.prettyPhoto.js',CClientScript::POS_END);
		Yii::app()->clientScript->registerScript('prettyPhoto',
			'$("a[rel^=\'prettyPhoto\']").prettyPhoto({social_tools:""});');
	}
}