<?php
$this->breadcrumbs=array(
	'管理走进科协信息'=>array('index'),
	'添加',
);

$this->menu=array(
	array('label'=>'添加走进科协信息', 'url'=>array('create')),
	array('label'=>'管理走进科协信息', 'url'=>array('admin')),
);
?>

<h1>添加走进科协信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>