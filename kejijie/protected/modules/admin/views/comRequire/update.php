<?php
$this->breadcrumbs=array(
	'Com Requires'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ComRequire', 'url'=>array('index')),
	array('label'=>'Create ComRequire', 'url'=>array('create')),
	array('label'=>'View ComRequire', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ComRequire', 'url'=>array('admin')),
);
?>

<h1>Update ComRequire <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>