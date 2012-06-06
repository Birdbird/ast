<?php
class PageController extends FrontController
{
	public function actionIndex()
	{
		$cilentScript = Yii::app()->clientScript;
		$this->addSlider(array('directionNav'=>false));
		$cilentScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.carouFredSel-5.6.0-packed.js',
			CClientScript::POS_END);
		$script = <<<EOD
$('.scoll-text ul').carouFredSel({width:940,scroll:{pauseOnHover:true,easing:'linear',duration:15000},auto:{pauseDuration:0}});
$('#scoll-notice').carouFredSel({scroll:{'pauseOnHover': true,items:1,duration:200},direction: "up",height:207});
EOD;
		$cilentScript->registerScript('index',$script);
		$this->render('index');
	}
	
	public function actionAbout()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/about.css');
		$cilentScript->registerScriptFile(Yii::app()->baseUrl.'/js/accordion.js',CClientScript::POS_END);
		$this->render('about');
	}
	
	public function actionXuehui()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/xuehui.css');
		$this->render('xuehui');
	}
	
	public function actionNews()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/news.css');
		$this->render('news');
	}
	
	public function actionAgriculture()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/country.css');
		$this->addSlider();
		$this->render('country');
	}
	
	public function actionSuzhi()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/suzhi.css');
		$this->addSlider();
		$this->render('suzhi');
	}
	
	public function actionHaizhi()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/haizhi.css');
		$this->addSlider();
		$cilentScript->registerScriptFile(Yii::app()->baseUrl.'/js/bxCarousel.js',CClientScript::POS_END);
		$script = <<<EOD
		$("#demo1").bxCarousel({ display_num: 7,  move: 1,  auto: true,  controls: false, margin: 0 });
EOD;
		$cilentScript->registerScript('haizhi',$script);
		$this->render('haizhi');
	}
	
	public function actionKejiguan()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/keji.css');
		$this->addSlider(array('directionNav'=>false));
		$this->render('kejiguan');
	}
	
	public function actionShenbian()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/shenbian.css');
		$this->render('shenbian');
	}
	
	public function actionDownload()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/country.css');
		$this->render('download');
	}
	
	public function actionImages()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/keji.css');
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/lightbox.css');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/lightbox.js',CClientScript::POS_END);
		$this->render('images');
	}
	
	public function actionArticle()
	{
		$this->render('article');
	}
	
	public function actionVideo()
	{
		$this->title = '科普视频';
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/keji.css');
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/prettyPhoto.css');
		Yii::app()->clientScript->registerScriptFile(
			Yii::app()->baseUrl.'/js/jquery.prettyPhoto.js',CClientScript::POS_END);
		Yii::app()->clientScript->registerScript('prettyPhoto',
			'$("a[rel^=\'prettyPhoto\']").prettyPhoto({social_tools:""});');
			
		$videos = Video::model()->findAll();
		$this->render('video',array('videos'=>$videos));
	}
	
	public function actionGame()
	{
		$this->title = '科普游戏';
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/keji.css');
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/prettyPhoto.css');
		Yii::app()->clientScript->registerScriptFile(
			Yii::app()->baseUrl.'/js/jquery.prettyPhoto.js',CClientScript::POS_END);
		Yii::app()->clientScript->registerScript('prettyPhoto',
			'$("a[rel^=\'prettyPhoto\']").prettyPhoto({social_tools:""});');
			
		$games = Game::model()->findAll();
		$this->render('game',array('games'=>$games));
	}
	
	protected function addSlider($options=array('controlNav'=>false))
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/flexslider.css');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.flexslider.js',CClientScript::POS_END);
		$options=CJavaScript::encode($options);
		$script = '$(".flexslider").flexslider('.$options.');';
		Yii::app()->clientScript->registerScript('flexslider',$script);
	}
}