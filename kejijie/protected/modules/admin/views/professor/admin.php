<?php
$this->breadcrumbs=array(
	'专家管理'=>array('admin'),
	'管理',
);

$this->menu=array(
	array('label'=>'专家管理', 'url'=>array('admin')),
	array('label'=>'添加专家', 'url'=>array('create')),
);
?>

<h1>专家管理</h1>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'professor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		// 'intro',
		// 'img',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
