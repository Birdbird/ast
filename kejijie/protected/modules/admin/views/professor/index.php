<?php
$this->breadcrumbs=array(
	'Professors',
);

$this->menu=array(
	array('label'=>'Create Professor', 'url'=>array('create')),
	array('label'=>'Manage Professor', 'url'=>array('admin')),
);
?>

<h1>Professors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
