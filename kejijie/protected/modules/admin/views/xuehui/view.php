<?php
$this->breadcrumbs=array(
	'Xuehuis'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Xuehui', 'url'=>array('index')),
	array('label'=>'Create Xuehui', 'url'=>array('create')),
	array('label'=>'Update Xuehui', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Xuehui', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Xuehui', 'url'=>array('admin')),
);
?>

<h1>View Xuehui #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'intro',
	),
)); ?>
