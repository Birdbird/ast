<?php
$this->breadcrumbs=array(
	'分类'=>array('admin'),
	'管理',
);

?>

<h1>添加分类</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<br>
<h1>分类管理</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category-grid',
	'dataProvider'=>$searchModel->search(),
	'filter'=>$searchModel,
	'columns'=>array(
		'id',
		'root',
		'name',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
