<?php
$this->breadcrumbs=array(
	'Com Requires'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ComRequire', 'url'=>array('index')),
	array('label'=>'Create ComRequire', 'url'=>array('create')),
	array('label'=>'Update ComRequire', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ComRequire', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ComRequire', 'url'=>array('admin')),
);
?>

<h1>View ComRequire #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'charge',
		'charge_tel',
		'contact',
		'contact_tel',
		'email',
		'zip_code',
		'require',
		'content',
		'tec_require',
		'forecast',
		'com_intro',
		'amount',
	),
)); ?>
