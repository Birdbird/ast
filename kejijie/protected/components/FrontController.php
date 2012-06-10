<?php
class FrontController extends CController
{
	public $menuID = SiteMenu::Index;
	public $title = false;
	
	public function init()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/style.css');
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/header.css');
		Yii::app()->clientScript->registerCoreScript('jquery');
		$cilentScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.carouFredSel-5.6.0-packed.js',
			CClientScript::POS_END);
		$cilentScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.cycle.lite.js',CClientScript::POS_END);
		$cilentScript->registerScript('flytext',"$('#fly-text').cycle({fx: 'fade' });");
	}
	
	protected function addSlider($options=array('controlNav'=>false))
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/flexslider.css');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.flexslider.js',CClientScript::POS_END);
		$options=CJavaScript::encode($options);
		$script = '$(".flexslider").flexslider('.$options.');';
		Yii::app()->clientScript->registerScript('flexslider',$script);
	}
}