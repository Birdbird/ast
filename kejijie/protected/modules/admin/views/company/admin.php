<?php
$this->breadcrumbs=array(
	'企业风采管理'=>array('admin'),
	'管理',
);

$this->menu=array(
	array('label'=>'企业风采管理', 'url'=>array('admin')),
	array('label'=>'添加企业信息', 'url'=>array('create')),
	array('label'=>'公司分类管理', 'url'=>array('sort/admin')),
);
?>

<h1>企业风采管理</h1>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'company-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'sort.name',
		// 'description',
		'links',
		// 'thumbnail',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
