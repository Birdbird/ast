<?php

class FileController extends CController
{
	public $layout=null;
	public static $ImageExt = array('jpg','png','gif','jpeg');
	public static $VideoExt = array('flv');
	
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
				'actions'=>array('upload'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionUpload()
	{
		$file = CUploadedFile::getInstanceByName('imageName');
		//var_dump($file);
		if(!$file)throw new CHttpException(400,'no image uploaded');
		$newfilename = time().mt_rand().'.'.$file->extensionName;
		if(strpos($file->type,'image')===FALSE){
			throw new CHttpException(400,'not a image file');
		}
		$file->saveAs('./upload/'.$newfilename);
		echo '<div id="image">'.Yii::app()->baseUrl.'/upload/'.$newfilename.'</div>';
	}
	
	public function actionAttach()
	{
		$file = CUploadedFile::getInstanceByName('Filedata');
		if(!$file)throw new CHttpException(400,'no file uploaded');
		if(in_array($file->extensionName,array('php'))){
			throw new CHttpException(400,'not a valid file');
		}
		$newfilename = time().mt_rand().'.'.$file->extensionName;
		// $file->saveAs('./upload/'.$newfilename);
		if($file->saveAs('./attach/'.$newfilename) ){
			$postAttach = new PostAttach;
			$postAttach->name = $file->name;
			$postAttach->file = $newfilename;
			if($postAttach->save()){
				echo CHtml::link($postAttach->name,Yii::app()->baseUrl.'/attach/'.$postAttach->file)
				.CHtml::hiddenField('attach[]',$postAttach->id);
			}
		}
	}
	
	public function actionThumbnail()
	{
		$file = CUploadedFile::getInstanceByName('Filedata');
		if(!$file)throw new CHttpException(400,'no file uploaded');
		$thumb=Yii::app()->phpThumb->create($file->tempName);
		$thumb->adaptiveResize(120,90);
		$newfilename = time().mt_rand().'.jpg';
		$thumb->save('./upload/thumbnail/'.$newfilename);
		echo '缩略图：'.CHtml::image(Yii::app()->baseUrl.'/upload/thumbnail/'.$newfilename)
			.CHtml::hiddenField('Post[thumbnail]',$newfilename);
	}

	public function actionImg()
	{
		$file = CUploadedFile::getInstanceByName('Filedata');
		if(!$file)throw new CHttpException(400,'no file uploaded');
		$thumb=Yii::app()->phpThumb->create($file->tempName);
		$thumb->resize(0,115);
		$newfilename = time().mt_rand().'.jpg';
		$thumb->save('./upload/touxiang/'.$newfilename);
		$file->saveAs('./upload/touxiang_big/'.$newfilename);
		echo '照片缩略图：'.CHtml::image(Yii::app()->baseUrl.'/upload/touxiang/'.$newfilename)
			.CHtml::hiddenField('Professor[img]',$newfilename);
	}
	
	public function actionSlide()
	{
		$file = CUploadedFile::getInstanceByName('Filedata');
		if(!$file)throw new CHttpException(400,'no image uploaded');
		$newfilename = time().mt_rand().'.'.$file->extensionName;
		if(in_array($file->extensionName,self::$ImageExt)===FALSE){
			throw new CHttpException(400,'not a image file');
		}
		if($file->saveAs('./upload/slide/'.$newfilename) && isset($_POST['slideID']) ){
			$slideImage = new SlideImage;
			$slideImage->image = $newfilename;
			$slideImage->slideID = $_POST['slideID'];
			$slideImage->save();
		}		
		echo '1';
	}
	
	public function actionImage()
	{
		$file = CUploadedFile::getInstanceByName('Filedata');
		if(!$file)throw new CHttpException(400,'no image uploaded');
		$newfilename = time().mt_rand().'.'.$file->extensionName;
		if(in_array($file->extensionName,self::$ImageExt)===FALSE){
			throw new CHttpException(400,'not a image file');
		}
		if($file->saveAs('./upload/'.$newfilename) && isset($_POST['album_id']) ){
			$albumImage = new AlbumImage;
			$albumImage->image = $newfilename;
			$albumImage->album_id = $_POST['album_id'];
			$albumImage->save();
		}		
		echo '1';
	}
	
	public function actionVideo()
	{
		$file = CUploadedFile::getInstanceByName('Filedata');
		if(!$file)throw new CHttpException(400,'no file uploaded');
		$newfilename = time().mt_rand().'.'.$file->extensionName;
		if(in_array($file->extensionName,self::$VideoExt)===FALSE){
			throw new CHttpException(400,'not a flv file');
		}
		if($file->saveAs('./upload/video/'.$newfilename)){
			echo '上传成功。'.CHtml::hiddenField('Video[file]',$newfilename);
		}		
	}
	
	public function actionVideoThumbnail()
	{
		$file = CUploadedFile::getInstanceByName('Filedata');
		if(!$file)throw new CHttpException(400,'no file uploaded');
		$thumb=Yii::app()->phpThumb->create($file->tempName);
		$thumb->adaptiveResize(200,150);
		$newfilename = time().mt_rand().'.jpg';
		if($thumb->save('./upload/thumbnail/'.$newfilename)){
			echo CHtml::image(Yii::app()->baseUrl.'/upload/thumbnail/'.$newfilename)
				.CHtml::hiddenField('Video[thumbnail]',$newfilename);
		}
	}
	
	public function actionGame()
	{
		$file = CUploadedFile::getInstanceByName('Filedata');
		if(!$file)throw new CHttpException(400,'no file uploaded');
		$newfilename = time().mt_rand().'.'.$file->extensionName;
		if(in_array($file->extensionName,array('swf'))===FALSE){
			throw new CHttpException(400,'not a swf file');
		}
		if($file->saveAs('./upload/game/'.$newfilename)){
			echo '上传成功。'.CHtml::hiddenField('Game[file]',$newfilename);
		}		
	}
	
	public function actionGameThumbnail()
	{
		$file = CUploadedFile::getInstanceByName('Filedata');
		if(!$file)throw new CHttpException(400,'no file uploaded');
		$thumb=Yii::app()->phpThumb->create($file->tempName);
		$thumb->adaptiveResize(200,150);
		$newfilename = time().mt_rand().'.jpg';
		if($thumb->save('./upload/thumbnail/'.$newfilename)){
			echo CHtml::image(Yii::app()->baseUrl.'/upload/thumbnail/'.$newfilename)
				.CHtml::hiddenField('Game[thumbnail]',$newfilename);
		}
	}

}