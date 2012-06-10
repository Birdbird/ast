<?php
class GameController extends Controller
{
	public $layout='/layouts/column2';
	
	public $menu = array(
		array('label'=>'小游戏管理', 'url'=>array('/admin/game/admin')),
		array('label'=>'添加小游戏', 'url'=>array('/admin/game/create')),
	);
	
	public $defaultAction = 'admin';
	
	public function actionCreate()
	{
		$model = new Game;
		if(isset($_POST['Game'])){
			$model->attributes = $_POST['Game'];
			if($model->save()){
				$this->redirect(array('admin'));
			}
		}
		$this->render('create',array('model'=>$model));
	}
	
	public function actionAdmin()
	{
		$model=new Game('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Game']))
			$model->attributes=$_GET['Game'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(isset($_POST['Game'])){
			$model->attributes=$_POST['Game'];
			if($model->save()){
				$this->redirect(array('admin'));
			}
		}			
		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			$this->loadModel($id)->delete();
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function loadModel($id)
	{
		$model=Game::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}