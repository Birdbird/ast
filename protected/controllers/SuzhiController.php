<?php
class SuzhiController extends FrontController
{
	public $menuID = SiteMenu::Suzhi;
	public function actionIndex()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/suzhi.css');
		$this->addSlider();
		$this->render('index');
	}
}