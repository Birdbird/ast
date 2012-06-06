<?php
$this->breadcrumbs=array(
	'Xuehui Posts',
);

$this->menu=array(
	array('label'=>'Create XuehuiPost', 'url'=>array('create')),
	array('label'=>'Manage XuehuiPost', 'url'=>array('admin')),
);
?>

<h1>Xuehui Posts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
