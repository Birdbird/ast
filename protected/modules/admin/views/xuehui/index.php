<?php
$this->breadcrumbs=array(
	'学会管理',
);

$this->menu=array(   
	array('label'=>'创建学会', 'url'=>array('create')),
	array('label'=>'管理学会', 'url'=>array('admin')),
);
?>

<h1>学会管理</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
