<?php

class ProjectPostController extends Controller
{
	public function actionView($id)
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$post=ComRequire::model()->findByPk($id);
		if($post===null)
			throw new CHttpException(404,'没有此分类');
		$this->render('view',array('post'=>$post));
	}
	
	public function actionCategory()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/news.css');
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/require.css');
		$criteria = new CDbCriteria(array(
			'order'=>'id desc',
		));
		$count=ComRequire::model()->count($criteria);
		$pagination=new CPagination($count);
		$pagination->pageSize=20;
		$pagination->applyLimit($criteria);
		$news = ComRequire::model()->findAll($criteria);
		$this->render('category',array(
			'news'=>$news,
			'pagination'=>$pagination,
		));
	}
}