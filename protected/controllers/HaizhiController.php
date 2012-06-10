<?php
class HaizhiController extends FrontController
{
	public $menuID = SiteMenu::Haizhi;
	public function actionIndex()
	{
		$cilentScript = Yii::app()->clientScript;
		$cilentScript->registerCssFile(Yii::app()->baseUrl.'/css/haizhi.css');
		$this->addSlider();
		$cilentScript->registerScriptFile(Yii::app()->baseUrl.'/js/bxCarousel.js',CClientScript::POS_END);
		$script = <<<EOD
		$("#demo1").bxCarousel({ display_num: 7,  move: 1,  auto: true,  controls: false, margin: 0 });
EOD;
		$cilentScript->registerScript('haizhi',$script);
		$bottomSlide = Slide::model()->findByPk(1);
		$this->render('index',array('bottomSlide'=>$bottomSlide));
	}
}