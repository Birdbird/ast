<?php
$this->breadcrumbs=array(
	'用户'=>array('admin'),
	'管理',
);

// $this->menu=array(
// 	array('label'=>'List User', 'url'=>array('index')),
// 	array('label'=>'Create User', 'url'=>array('create')),
// );
?>

<h1>用户管理</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'id', 'headerHtmlOptions'=>array('width'=>'22px')),
		'username',
		//'password',
		//'salt',
		'email',
		//'profile',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
