<?php

class ScrollTextController extends Controller
{
    public $layout='column2';

    public function actionCreate()
    {
        $model=new ScrollText;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['ScrollText']))
        {
            $model->attributes=$_POST['ScrollText'];
            if($model->save())
                $this->redirect(array('admin'));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);
        // $this->performAjaxValidation($model);

        if(isset($_POST['ScrollText']))
        {
            $model->attributes=$_POST['ScrollText'];
            if($model->save())
                $this->redirect(array('admin'));
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

    public function actionAdmin()
    {
        $model=new ScrollText('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['ScrollText']))
            $model->attributes=$_GET['ScrollText'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    public function loadModel($id)
    {
        $model=ScrollText::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='scroll-text-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}