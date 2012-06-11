<?php
$this->menu=array(
	array('label'=>'管理滚动字幕', 'url'=>array('admin')),
	array('label'=>'新建滚动字幕', 'url'=>array('create')),
);

?>

<h1>滚动字幕管理</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'scroll-text-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'id', 'headerHtmlOptions'=>array('width'=>'22px')),
		'text',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
