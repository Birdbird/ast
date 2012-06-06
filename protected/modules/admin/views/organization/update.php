<?php
$this->breadcrumbs=array(
	'管理走进科协信息'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'修改',
);

$this->menu=array(
	array('label'=>'添加走进科协信息', 'url'=>array('create')),
	array('label'=>'管理走进科协信息', 'url'=>array('admin')),
);
?>

<h1>修改走进科协信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>