<?php

class PostController extends FrontController
{
	//public $menuID = SiteMenu::Haizhi;
	public function actionView($id)
	{
		$post=Post::model()->findByPk($id);
		if($post===null)
			throw new CHttpException(404,'The requested page does not exist.');
		$this->setMenus($post->category);
		$this->render('view',array('post'=>$post));
	}
	
	public function actionCategory($id)
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/news.css');
		$category = Category::model()->findByPk($id);
		if($category===null)
			throw new CHttpException(404,'The requested page does not exist.');
		$this->setMenus($category);
		$criteria = new CDbCriteria(array(
			'condition'=>'category_id=:category_id',
			'params'=>array(':category_id'=>$id),
			'order'=>'id desc',
		));
		$count=Post::model()->count($criteria);
		$pagination=new CPagination($count);
		$pagination->pageSize=20;
		$pagination->applyLimit($criteria);
		$news = Post::model()->findAll($criteria);
		$this->render('category',array(
			'news'=>$news,
			'pagination'=>$pagination,
			'category'=>$category,
		));
	}
	
	protected function setMenus($category)
	{
		$id = $category->id;
		$categoryList = Category::categoryIDList($id);
		foreach (SiteMenu::$categories as $rootID => $menuID) {
			if(in_array($rootID,$categoryList)){
				$this->menuID = $menuID;
				$this->breadcrumbs = SiteMenu::$breadcrumbs[$rootID];
				$this->breadcrumbs[]=$category->name;
				break;
			}
		}
		if(!count($this->breadcrumbs)){
			if(isset(SiteMenu::$breadcrumbs[$id])){
				$this->breadcrumbs = SiteMenu::$breadcrumbs[$id];
			}
		}
	}
}