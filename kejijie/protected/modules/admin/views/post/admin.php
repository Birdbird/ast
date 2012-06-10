<?php
$this->breadcrumbs=array(
	'文章'=>array('admin'),
	'管理',
);
?>

<h1>文章管理</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array('name'=>'id', 'headerHtmlOptions'=>array('width'=>'22px')),
		'title',
		//'content:html',
		//'create_time',
		array(
			'name'=>'create_time',
			'type'=>'date',
		),
		//'update_time',
		'author.username',
		'category.name',
		// 'hot','top',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
