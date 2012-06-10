<?php
class NewsList extends CWidget
{
	public $categoryID;
	public $lines=7;
	public $news;
	public $length=18;
	public $showDate = false;
	
	public function init()
	{
		$this->news = Post::model()->findAll(array(
			'condition'=>'category_id=:category_id',
			'params'=>array(':category_id'=>$this->categoryID),
			'limit'=>$this->lines,
			'order'=>'id desc',
		));
	}
	
	public function run()
	{
		$this->render('newslist');
	}
}