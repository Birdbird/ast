<?php
class ShequController extends FrontController
{
	public $menuID = SiteMenu::Yimin;
	public function actionIndex()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/country.css');
		$this->addSlider();
		// $this->render('index');
		$posts = Post::getPostsInCategories(array(66,70),6);
		$rongyu = Post::getPostsInCategories(array(70),8);
		$important = Post::model()->find(array('condition'=>'category_id = 67','order'=>'id desc'));
		$this->render('index',array('posts'=>$posts,'important'=>$important,'rongyus'=>$rongyu));
	}
	
	public function actionRongyu()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/country.css');
		$this->render('rongyu');
	}
}