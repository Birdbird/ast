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
		$important = Post::model()->find(array('condition'=>'category_id = 15','order'=>'id desc'));
		$this->render('index',array('posts'=>$posts,'important'=>$important));
	}
	
	public function actionRongyu()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/country.css');
		$this->render('rongyu');
	}

	public function actionDongtai()
	{
		$posts = Post::getPostsInCategories(array(65,18),6);
		$this->render('index',array('posts'=>$posts));
	}
}