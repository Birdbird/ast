<?php
class HuinongController extends FrontController
{
	public $menuID = SiteMenu::Huinong;
	public function actionIndex()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/country.css');
		$this->addSlider();
		$this->render('index');
	}
	
	public function actionRongyu()
	{
		$this->render('rongyu');
	}
}