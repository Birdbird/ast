<?php
$this->breadcrumbs=array(
	'用户'=>array('admin'),
	'添加',
);

// $this->menu=array(
// 	array('label'=>'List User', 'url'=>array('index')),
// 	array('label'=>'Manage User', 'url'=>array('admin')),
// );
?>

<h1>添加用户</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>