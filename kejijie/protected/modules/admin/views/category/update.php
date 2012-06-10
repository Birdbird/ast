<?php
$this->breadcrumbs=array(
	'分类'=>array('admin'),
	$model->name,
	'修改',
);

// $this->menu=array(
// 	array('label'=>'List Category', 'url'=>array('index')),
// 	array('label'=>'Create Category', 'url'=>array('create')),
// 	array('label'=>'View Category', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage Category', 'url'=>array('admin')),
// );
?>

<h1>修改分类 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>