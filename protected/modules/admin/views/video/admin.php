<h1>视频管理</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'video-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array('name'=>'id', 'headerHtmlOptions'=>array('width'=>'22px')),
		'title',

		array(
			'name'=>'create_time',
			'type'=>'date',
			'headerHtmlOptions'=>array('width'=>'80px'),
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>