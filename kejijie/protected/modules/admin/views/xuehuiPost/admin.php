<?php
$this->breadcrumbs=array(
	'学会动态'=>array('admin'),
	'管理',
);

$this->menu=array(
	array('label'=>'创建学会', 'url'=>array('xuehui/create')),
	array('label'=>'管理学会', 'url'=>array('xuehui/admin')),
	array('label'=>'创建学会动态', 'url'=>array('create')),
	array('label'=>'学会动态管理', 'url'=>array('admin')),	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('xuehui-post-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>学会动态管理</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'xuehui-post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'id', 'headerHtmlOptions'=>array('width'=>'22px')),
		'xuehui.name',
		'title',
		// 'content',
		array(
			'name'=>'create_time',
			'type'=>'date',
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
