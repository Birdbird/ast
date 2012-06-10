<?php
$this->breadcrumbs=array(
	'走进科协'=>array('admin'),
	'管理',
);

$this->menu=array(
	array('label'=>'添加走进科协信息', 'url'=>array('create')),
	array('label'=>'管理走进科协信息', 'url'=>array('admin')),
);

?>

<h1>管理走进科协信息</h1>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'organization-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		// 'intro',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
