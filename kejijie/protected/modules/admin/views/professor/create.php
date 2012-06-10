<?php
$this->breadcrumbs=array(
	'专家管理'=>array('admin'),
	'添加',
);

$this->menu=array(
	array('label'=>'专家管理', 'url'=>array('admin')),
	array('label'=>'添加专家', 'url'=>array('create')),
);
?>

<h1>添加专家</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>