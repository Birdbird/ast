<?php

class PostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='column2';
	
	public $menu = array(
		array('label'=>'文章管理', 'url'=>array('/admin/post/admin')),
		array('label'=>'添加文章', 'url'=>array('/admin/post/create')),
		array('label'=>'分类管理', 'url'=>array('/admin/category/admin')),
	);
	
	public $defaultAction = 'admin';

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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Post;
		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->save()){
				$this->attachFile($model);
				$this->redirect(array('admin'));
			}
		}
		$this->loadCategories($model);
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post'])){
			$model->attributes=$_POST['Post'];
			if($model->save()){
				$this->attachFile($model);
				$this->redirect(array('admin'));
			}
		}
		
		$this->loadCategories($model);
		
		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	protected function attachFile($model)
	{
		if(isset($_POST['attach'])){
			foreach ($_POST['attach'] as $attachID) {
				PostAttach::model()->updateByPk($attachID,array('post_id'=>$model->id,'category_id'=>$model->category_id));
			}
		}
	}
	
	protected function loadCategories($model) {
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseurl.'/js/jquery.optionTree.js',CClientScript::POS_END);
		$option = array(
			'indexed'=>true,'on_each_change'=>$this->createUrl('/admin/category/list'),'choose'=>'选择分类'
		);
		if(!$model->isNewRecord){
			$categories = array();
			foreach (Category::family($model->category_id) as $category) {
				$categories[]=$category->id;
			}
			if(count($categories)) {
				$option['preselect'] = array('Post[category_id]'=>$categories);
			}
		}
		$jsOption = CJavaScript::encode($option);
		$script = <<<EOD
		var options = {$jsOption};
    $.getJSON(baseUrl+'/admin/category/list', function (tree) {
        $('#Post_category_id').optionTree(tree, options).change();
    });
EOD;
		Yii::app()->clientScript->registerScript('category',$script);
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Post');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
