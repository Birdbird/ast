<?php
$this->breadcrumbs=array(
	'学会'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'修改',
);

$this->menu=array(
	array('label'=>'创建学会', 'url'=>array('create')),
	array('label'=>'管理学会', 'url'=>array('admin')),
	array('label'=>'添加学会动态', 'url'=>array('xuehuiPost/create')),
	array('label'=>'学会动态管理', 'url'=>array('xuehuiPost/admin')),	
);
?>

<h1>修改学会信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>