<?php
class SuzhiController extends FrontController
{
	public $menuID = SiteMenu::Suzhi;
	public function actionIndex()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/suzhi.css');
		$important = Post::model()->find(array('condition'=>'category_id = 32','order'=>'id desc'));
		$this->addSlider();
		$this->render('index',array('important'=>$important));
	}
}