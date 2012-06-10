<?php
class PageController extends FrontController
{
	public function actionIndex()
	{
		$cilentScript = Yii::app()->clientScript;
		$this->addSlider(array('directionNav'=>false));
		$slidernews = Post::model()->findAll(array('condition'=>'thumbnail !=0 and category_id in (select id from category where root =57)','limit'=>7,'order'=>'id desc'));
		$haizhinews = Post::model()->findAll(array('condition'=>'thumbnail !=0 and category_id in (select id from category where root =43)','limit'=>2,'order'=>'id desc'));
		$scrolltexts = ScrollText::model()->findAll(array('limit'=>8,'order'=>'id desc'));
		$videos = Video::model()->findAll(array('limit'=>4,'order'=>'id desc'));
		$games = Game::model()->findAll(array('limit'=>4,'order'=>'id desc'));
		$cilentScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.carouFredSel-5.6.0-packed.js',
			CClientScript::POS_END);
		$script = <<<EOD
$('.scoll-text ul').carouFredSel({width:940,scroll:{pauseOnHover:true,easing:'linear',duration:15000},auto:{pauseDuration:0}});
$('#scoll-notice').carouFredSel({scroll:{'pauseOnHover': true,items:1,duration:200},direction: "up",height:207});
EOD;
		$cilentScript->registerScript('index',$script);
		$this->render('index',array('slidernews'=>$slidernews,'haizhinews'=>$haizhinews,'scrolltexts'=>$scrolltexts,
			'videos'=>$videos,'games'=>$games));
	}
	
	public function actionAbout($id=6)
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/about.css');
		$cilentScript->registerScriptFile(Yii::app()->baseUrl.'/js/accordion.js',CClientScript::POS_END);
		$content = Organization::model()->findByPk($id);
		if($content===null)
			throw new CHttpException(404,'The requested page does not exist.');
		$this->render('about',array('content'=>$content));
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
	
	public function actionKejiguan()
	{
		$videoitems = Video::model()->findAll(array('limit'=>4,'order'=>'id desc'));
		$games = Game::model()->findAll(array('limit'=>4,'order'=>'id desc'));
		$videos = Video::model()->find(array('order'=>'id desc'));
		$albumId = Album::model()->find(array('order'=>'id desc'));
		$album = Album::model()->findByPk($albumId->id);
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/keji.css');
		$this->loadPrettyPhoto();
		$this->addSlider(array('directionNav'=>false));
		$this->render('kejiguan',array('videos'=>$videos,'videoitems'=>$videoitems,'games'=>$games,'album'=>$album));
	}

	protected function loadPrettyPhoto()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/prettyPhoto.css');
		Yii::app()->clientScript->registerScriptFile(
			Yii::app()->baseUrl.'/js/jquery.prettyPhoto.js',CClientScript::POS_END);
		Yii::app()->clientScript->registerScript('prettyPhoto',
			'$("a[rel^=\'prettyPhoto\']").prettyPhoto({social_tools:""});');
	}
	
	public function actionShenbian()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/shenbian.css');
		$slidernews = Post::model()->findAll(array('condition'=>'thumbnail !=0 and category_id in (select id from category where root =57)','limit'=>5,'order'=>'id desc'));
		$this->render('shenbian',array('slidernews'=>$slidernews));
	}
	
	public function actionDownload()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/country.css');
		$this->render('download');
	}
	
	public function actionImages()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/keji.css');
		$this->loadPrettyPhoto();
		$album = Album::model()->findByPk('1');
		$this->render('images',array('album'=>$album));
	}
	
	public function actionGongzuozhe()
	{
		$model = new Request;
		if(isset($_POST['Request']))
		{
			$model->attributes = $_POST['Request'];
			$model->ip = Yii::app()->request->userHostAddress;
			if($model->save())
				$this->refresh();
		}
		
		$criteria = new CDbCriteria(array(
			'order'=>'id desc',
		));
		$count=Request::model()->count($criteria);
		$pagination=new CPagination($count);
		$pagination->pageSize=5;
		$pagination->applyLimit($criteria);
		$requests = Request::model()->findAll($criteria);
		
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/gongzuozhe.css');
		$this->render('gongzuozhe',array('requests'=>$requests,'model'=>$model,'pagination'=>$pagination,));
	}

	public function actionArticle()
	{
		$this->render('article');
	}
	
	public function actionVideo()
	{
		$this->title = '科普视频';
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/keji.css');
		$this->loadPrettyPhoto();
			
		$videos = Video::model()->findAll();
		$this->render('video',array('videos'=>$videos));
	}
	
	public function actionGame()
	{
		$this->title = '科普游戏';
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/keji.css');
		$this->loadPrettyPhoto();
			
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