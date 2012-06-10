<?php
$this->breadcrumbs=array(
	'企业需求管理'=>array('admin'),
	'添加',
);

$this->menu=array(
	array('label'=>'企业需求管理', 'url'=>array('admin')),
	array('label'=>'添加企业需求', 'url'=>array('create')),
);
?>

<h1>添加企业需求</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>