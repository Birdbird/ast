<?php

class PostController extends Controller
{
	public function actionView($id)
	{
		$post=Post::model()->findByPk($id);
		if($post===null)
			throw new CHttpException(404,'没有此分类');
		$this->render('view',array('post'=>$post));
	}
	
	public function actionCategory($id)
	{
		$category = Category::model()->findByPk($id);
		if($category===null)
			throw new CHttpException(404,'没有此分类');
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/news.css');
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$criteria = new CDbCriteria(array(
			'condition'=>'category_id=:category_id',
			'params'=>array(':category_id'=>$id),
			'order'=>'id desc',
		));
		$count=Post::model()->count($criteria);
		$pagination=new CPagination($count);
		$pagination->pageSize=20;
		$pagination->applyLimit($criteria);
		$news = Post::model()->findAll($criteria);
		$this->render('category',array(
			'news'=>$news,
			'pagination'=>$pagination,
			'category'=>$category,
		));
	}
}