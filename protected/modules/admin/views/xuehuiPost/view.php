<?php
$this->breadcrumbs=array(
	'Xuehui Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List XuehuiPost', 'url'=>array('index')),
	array('label'=>'Create XuehuiPost', 'url'=>array('create')),
	array('label'=>'Update XuehuiPost', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete XuehuiPost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage XuehuiPost', 'url'=>array('admin')),
);
?>

<h1>View XuehuiPost #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'xuehui_id',
		'title',
		'content',
	),
)); ?>
