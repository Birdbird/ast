<?php
class VideoController extends Controller
{
	public $layout='/layouts/column2';
	
	public $menu = array(
		array('label'=>'视频管理', 'url'=>array('/admin/video/admin')),
		array('label'=>'添加视频', 'url'=>array('/admin/video/create')),
	);
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public $defaultAction = 'admin';
	
	public function actionCreate()
	{
		$model = new Video;
		if(isset($_POST['Video'])){
			$model->attributes = $_POST['Video'];
			if($model->save()){
				$this->redirect(array('admin'));
			}
		}
		$this->render('create',array('model'=>$model));
	}
	
	public function actionAdmin()
	{
		$model=new Video('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Video']))
			$model->attributes=$_GET['Video'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(isset($_POST['Video'])){
			$model->attributes=$_POST['Video'];
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
		$model=Video::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}