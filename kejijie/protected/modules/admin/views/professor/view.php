<?php
$this->breadcrumbs=array(
	'专家管理'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'专家管理', 'url'=>array('admin')),
	array('label'=>'添加专家', 'url'=>array('create')),
);
?>

<h1>View Professor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'intro',
		'img',
	),
)); ?>
