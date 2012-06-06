<?php
$this->breadcrumbs=array(
	'学会动态'=>array('index'),
	'添加',
);

$this->menu=array(
	array('label'=>'创建学会', 'url'=>array('xuehui/create')),
	array('label'=>'管理学会', 'url'=>array('xuehui/admin')),
	array('label'=>'创建学会动态', 'url'=>array('create')),
	array('label'=>'学会动态管理', 'url'=>array('admin')),	
);
?>

<h1>添加学会动态</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>