<?php
$this->breadcrumbs=array(
	'学会'=>array('admin'),
	'创建',
);

$this->menu=array(
	array('label'=>'创建学会', 'url'=>array('create')),
	array('label'=>'管理学会', 'url'=>array('admin')),
	array('label'=>'添加学会动态', 'url'=>array('xuehuiPost/create')),
	array('label'=>'学会动态管理', 'url'=>array('xuehuiPost/admin')),	
);
?>

<h1>创建学会</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>