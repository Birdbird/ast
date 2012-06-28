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
		$criteria = new CDbCriteria(array(
			// 'condition'=>'category_id=:category_id',
			// 'params'=>array(':category_id'=>$id),
			'order'=>'id desc',
		));
		$count=XuehuiPost::model()->count($criteria);
		$pagination=new CPagination($count);
		$pagination->pageSize=20;
		$pagination->applyLimit($criteria);
		$xuehuiPosts = XuehuiPost::model()->findAll($criteria);
		$this->render('index',array('xuehuis'=>$xuehuis,'xuehuiPosts'=>$xuehuiPosts,'pagination'=>$pagination));
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