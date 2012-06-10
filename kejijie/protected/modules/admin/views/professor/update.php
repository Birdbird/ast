<?php
$this->breadcrumbs=array(
	'专家管理'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'修改',
);

$this->menu=array(
	array('label'=>'专家管理', 'url'=>array('admin')),
	array('label'=>'添加专家', 'url'=>array('create')),
);
?>

<h1>修改专家信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>