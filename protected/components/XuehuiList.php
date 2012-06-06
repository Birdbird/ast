<?php
class XuehuiList extends NewsList {
	public $categoryIDs;
	
	public function init()
	{
		$this->news = XuehuiPost::model()->findAll(array(
			'limit'=>$this->lines,
			'order'=>'create_time desc',
		));
	}
}