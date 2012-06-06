<?php

class PostController extends FrontController
{
	public $menuID = SiteMenu::Haizhi;
	public function actionView($id)
	{
		$post=Post::model()->findByPk($id);
		if($post===null)
			throw new CHttpException(404,'The requested page does not exist.');
		$this->render('view',array('post'=>$post));
	}
	
	public function actionCategory($id)
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/news.css');
		$criteria = new CDbCriteria(array(
			'condition'=>'category_id=:category_id',
			'params'=>array(':category_id'=>$id),
			'order'=>'id desc',
		));
		$count=Post::model()->count($criteria);
		$pagination=new CPagination($count);
		$pagination->pageSize=10;
		$pagination->applyLimit($criteria);
		$news = Post::model()->findAll($criteria);
		$this->render('category',array(
			'news'=>$news,
			'pagination'=>$pagination,
		));
	}
}