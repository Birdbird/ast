<?php
class XuehuiList extends XueHuiNewsList {
	public $categoryIDs;
	
	public function init()
	{
		$this->news = XuehuiPost::model()->findAll(array(
			'limit'=>$this->lines,
			'order'=>'create_time desc',
		));
	}
}