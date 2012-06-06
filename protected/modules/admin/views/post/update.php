<?php
$this->breadcrumbs=array(
	'文章'=>array('admin'),
	'修改文章',
);

// $this->menu=array(
// 	array('label'=>'List Post', 'url'=>array('index')),
// 	array('label'=>'Create Post', 'url'=>array('create')),
// 	array('label'=>'View Post', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage Post', 'url'=>array('admin')),
// );
?>

<h1>修改文章</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>