<?php 
class HotList extends CWidget
{
	public $hotNews;
	public $topNews;
	public $length=18;

	public function init()
	{
		$this->hotNews = Post::model()->findAll(array(
			'condition'=>"hot=:hot",
			'params'=>array(':hot'=>'1'),
			'limit'=>10,
			'order'=>'id desc',
		));
		$this->topNews = Post::model()->findAll(array(
			'condition'=>"top=:top",
			'params'=>array(':top'=>'1'),
			'limit'=>5,
			'order'=>'id desc',
		));
	}

	public function run()
	{
		$this->render('hotlist');
	}
} 