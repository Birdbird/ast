<?php
$this->breadcrumbs=array(
	'Com Requires',
);

$this->menu=array(
	array('label'=>'Create ComRequire', 'url'=>array('create')),
	array('label'=>'Manage ComRequire', 'url'=>array('admin')),
);
?>

<h1>Com Requires</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
