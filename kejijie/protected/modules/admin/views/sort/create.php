<?php
$this->breadcrumbs=array(
	'公司分类管理'=>array('admin'),
	'添加',
);

$this->menu=array(
	array('label'=>'公司分类管理', 'url'=>array('admin')),
	array('label'=>'添加公司分类', 'url'=>array('create')),
);
?>

<h1>添加公司分类</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>