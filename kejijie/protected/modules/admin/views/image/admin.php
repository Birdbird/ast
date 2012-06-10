<h1>图吧管理</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'image-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'columns'=>array(
		//'id',
		array('name'=>'id', 'headerHtmlOptions'=>array('width'=>'22px')),
		//'name',
		array(
		    'class'=>'CLinkColumn',
		    'labelExpression'=>'$data->name."  (点击添加图片)"',
		    'urlExpression'=>'Yii::app()->createUrl("/admin/image/view",array("id"=>$data->id))',
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}{delete}',
		),
	),
)); ?>