<?php
class XueHuiNewsList extends CWidget
{
	public $categoryID;
	public $lines=7;
	public $news;
	public $length=18;
	public $showDate = false;
	
	public function init()
	{
		$this->news = XuehuiPost::model()->findAll(array(
			'condition'=>'xuehui_id=:xuehui_id',
			'params'=>array(':xuehui_id'=>$this->categoryID),
			'limit'=>$this->lines,
			'order'=>'id desc',
		));
	}
	
	public function run()
	{
		$this->render('xuehuinews');
	}
}