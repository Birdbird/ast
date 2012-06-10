<?php
class XuehuiController extends FrontController
{
	public function init()
	{
		parent::init();
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/xuehui.css');
	}

	public function actionIndex()
	{
		$xuehuis = Xuehui::model()->findAll();
		$xuehuiPosts = XuehuiPost::model()->findAll();
		$this->render('index',array('xuehuis'=>$xuehuis,'xuehuiPosts'=>$xuehuiPosts));
	}

	public function actionPost($id)
	{
		$post = XuehuiPost::model()->findByPk($id);
		$xuehuis = Xuehui::model()->findAll();
		if($post===null)
			throw new CHttpException(404,'The requested page does not exist.');
		$this->render('post',array('post'=>$post,'xuehuis'=>$xuehuis));
	}

	public function actionIntro($id)
	{
		$post = Xuehui::model()->findByPk($id);
		$xuehuis = Xuehui::model()->findAll();
		if($post===null)
			throw new CHttpException(404,'The requested page does not exist.');
		$this->render('intro',array('post'=>$post,'xuehuis'=>$xuehuis));
	}
}