<?php

class SlideController extends Controller
{
	public $layout='/layouts/column2';
	
	public $menu = array(
		array('label'=>'幻灯片管理', 'url'=>array('slide/admin')),
		array('label'=>'添加幻灯片相册', 'url'=>array('slide/create')),
	);
	
	public function actionUpload()
	{
		$this->render('upload');
	}
	
	public function actionAdmin()
	{
		$model=new Slide('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Slide']))
			$model->attributes=$_GET['Slide'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionCreate()
	{
		$model = new Slide;
		if(isset($_POST['Slide'])){
			$model->attributes = $_POST['Slide'];
			if($model->save()){
				$this->redirect(array('admin'));
			}
		}
		$this->render('create',array('model'=>$model));
	}
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(isset($_POST['Slide'])){
			$model->attributes = $_POST['Slide'];
			if($model->save()){
				$this->redirect(array('admin'));
			}
		}
		$this->render('create',array('model'=>$model));
	}
	
	public function actionView($id)
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/slide-manage.css');
		$slide = $this->loadModel($id);
		$this->render('view',array('slide'=>$slide));
	}
	
	public function actionDeleteimage()
	{
		$slideImageID = Yii::app()->request->getParam('slideImageID');
		if($slideImageID){
			$slideImage = SlideImage::model()->findByPk($slideImageID);
			if(!$slideImage) throw new CHttpException(404,'The requested page does not exist.');
			$slideImage->delete();
		}
		$this->redirect(array('view','id'=>$slideImage->slideID));
	}
	
	public function actionUpdateImagesInfo()
	{
		foreach ($_POST as $key => $value) {
			if(strpos($key,'slideImage_')===0){
				$slideImageID = intval(str_replace('slideImage_','',$key));
				if($slideImageID && $slideImage = SlideImage::model()->findByPk($slideImageID)){
					$slideImage->attributes = $_POST[$key];
					$slideImage->save();
				}
			}
		}
		if($slideImage) $this->redirect(array('view','id'=>$slideImage->slideID));
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
		$model=Slide::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
		);
	}
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','upload'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
}