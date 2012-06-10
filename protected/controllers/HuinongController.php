<?php
class HuinongController extends FrontController
{
	public $menuID = SiteMenu::Huinong;
	public function actionIndex()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/country.css');
		$this->addSlider();
		// $this->render('index');
		$posts = Post::getPostsInCategories(array(65,18),6);
		$rongyu = Post::getPostsInCategories(array(18),8);
		$important = Post::model()->find(array('condition'=>'category_id = 15','order'=>'id desc'));
		$this->render('index',array('posts'=>$posts,'important'=>$important,'rongyus'=>$rongyu));
	}
	
	public function actionRongyu()
	{
		$hotrnews = Post::model()->find(array('condition'=>'thumbnail !=0 and category_id = 22','order'=>'id desc'));
		$importentrnews = Post::model()->find(array('condition'=>'thumbnail !=0 and category_id = 24','order'=>'id desc'));
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/country.css');
		$this->render('rongyu',array('hotrnews'=>$hotrnews,'importentrnews'=>$importentrnews));
	}
}