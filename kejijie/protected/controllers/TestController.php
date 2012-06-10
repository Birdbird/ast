<?php

class TestController extends FrontController
{
	public function actionSlider(){
		$this->render('slider');
	}
	
	public function actionUpdate()
	{
		PostAttach::model()->updateByPk(17,array('post_id'=>200));
		echo 'ok';
	}
	
	public function actionPosts()
	{
		echo count(Post::getPostsInCategories(array(65,66)));
	}
}