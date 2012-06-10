<?php
$this->breadcrumbs=array(
	'公司分类管理'=>array('admin'),
	'管理',
);

$this->menu=array(
	array('label'=>'企业风采管理', 'url'=>array('company/admin')),
	array('label'=>'添加企业信息', 'url'=>array('company/create')),
	array('label'=>'公司分类管理', 'url'=>array('admin')),
);
?>

<h1>添加分类</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<br>
<h1>公司分类管理</h1>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sort-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
