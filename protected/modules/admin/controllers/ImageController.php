<?php

class ImageController extends Controller
{
	public $layout='/layouts/column2';
	
	public $menu = array(
		array('label'=>'图片管理', 'url'=>array('image/admin')),
		array('label'=>'添加相册', 'url'=>array('image/create')),
	);
	
	public function actionAdmin()
	{
		$model=new Album('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Album']))
			$model->attributes=$_GET['Album'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionCreate()
	{
		$model = new Album;
		if(isset($_POST['Album'])){
			$model->attributes = $_POST['Album'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$this->render('create',array('model'=>$model));
	}
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(isset($_POST['Album'])){
			$model->attributes = $_POST['Album'];
			if($model->save()){
				$this->redirect(array('admin'));
			}
		}
		$this->render('create',array('model'=>$model));
	}
	
	public function actionView($id)
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/slide-manage.css');
		$album = $this->loadModel($id);
		$this->render('view',array('album'=>$album));
	}
	
	public function actionDeleteimage()
	{
		$albumImageID = Yii::app()->request->getParam('albumImage');
		if($albumImageID){
			$albumImage = AlbumImage::model()->findByPk($albumImageID);
			if(!$albumImage) throw new CHttpException(404,'The requested page does not exist.');
			$albumImage->delete();
		}
		$this->redirect(array('view','id'=>$albumImage->album_id));
	}
	
	public function actionUpdateImagesInfo()
	{
		foreach ($_POST as $key => $value) {
			if(strpos($key,'albumImage_')===0){
				$albumImageID = intval(str_replace('albumImage_','',$key));
				if($albumImageID && $albumImage = AlbumImage::model()->findByPk($albumImageID)){
					$albumImage->attributes = $_POST[$key];
					$albumImage->save();
				}
			}
		}
		if($albumImage) $this->redirect(array('view','id'=>$albumImage->album_id));
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
		$model=Album::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}