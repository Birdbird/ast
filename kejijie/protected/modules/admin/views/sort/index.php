<?php
$this->breadcrumbs=array(
	'Sorts',
);

$this->menu=array(
	array('label'=>'Create Sort', 'url'=>array('create')),
	array('label'=>'Manage Sort', 'url'=>array('admin')),
);
?>

<h1>Sorts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
