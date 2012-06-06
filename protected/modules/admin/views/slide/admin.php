<h1>幻灯片管理</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'slide-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'columns'=>array(
		//'id',
		array('name'=>'id', 'headerHtmlOptions'=>array('width'=>'22px')),
		//'name',
		array(
		    'class'=>'CLinkColumn',
		    'labelExpression'=>'$data->name."  (点击添加图片)"',
		    'urlExpression'=>'Yii::app()->createUrl("/admin/slide/view",array("id"=>$data->id))',
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}{delete}',
		),
	),
)); ?>