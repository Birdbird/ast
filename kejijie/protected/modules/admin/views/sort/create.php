<?php
$this->breadcrumbs=array(
	'公司分类管理'=>array('admin'),
	'添加',
);

$this->menu=array(
	array('label'=>'企业风采管理', 'url'=>array('company/admin')),
	array('label'=>'添加企业信息', 'url'=>array('company/create')),
	array('label'=>'公司分类管理', 'url'=>array('admin')),
);
?>

<h1>添加公司分类</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>