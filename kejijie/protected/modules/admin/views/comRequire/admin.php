<?php
$this->breadcrumbs=array(
	'企业需求管理'=>array('admin'),
	'管理',
);

$this->menu=array(
	array('label'=>'企业需求管理', 'url'=>array('admin')),
	array('label'=>'添加企业需求', 'url'=>array('create')),
);
?>

<h1>企业需求管理</h1>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'com-require-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		// 'address',
		'charge',
		// 'charge_tel',
		'contact',
		'require',
		/*
		'contact_tel',
		'email',
		'zip_code',		
		'content',
		'tec_require',
		'forecast',
		'com_intro',
		'amount',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
