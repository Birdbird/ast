<?php
$this->breadcrumbs=array(
	'企业风采管理'=>array('admin'),
	'添加',
);

$this->menu=array(
	array('label'=>'企业风采管理', 'url'=>array('admin')),
	array('label'=>'添加企业信息', 'url'=>array('create')),
	array('label'=>'公司分类管理', 'url'=>array('sort/admin')),
);
?>

<h1>添加企业信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>