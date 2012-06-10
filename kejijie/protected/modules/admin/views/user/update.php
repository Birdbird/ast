<?php
$this->breadcrumbs=array(
	'用户'=>array('admin'),
	$model->id,
	'修改',
);

// $this->menu=array(
// 	array('label'=>'List User', 'url'=>array('index')),
// 	array('label'=>'Create User', 'url'=>array('create')),
// 	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage User', 'url'=>array('admin')),
// );
?>

<h1>修改用户信息 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>