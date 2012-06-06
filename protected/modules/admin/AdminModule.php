<?php

class AdminModule extends CWebModule
{	
	public function init()
	{
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
		
		$this->layoutPath = Yii::getPathOfAlias('admin.views.layouts');
		$this->layout = '/layouts/column1';
		$baseUrl = Yii::app()->createAbsoluteUrl('/');
		Yii::app()->clientScript->registerScript('baseUrl',"var baseUrl = '{$baseUrl}';",CClientScript::POS_HEAD);
	}
}
