<h1>建言献策管理</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'advise-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'columns'=>array(
		array('name'=>'id', 'headerHtmlOptions'=>array('width'=>'22px')),
		'nickname',
		'ip',
		array('name'=>'content','value'=>'mb_substr($data->content,0,40)'),
		array('header'=>'回复','value'=>'$data->response?"已回复":"待回复"'),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{delete}',
		),
	),
)); ?>
