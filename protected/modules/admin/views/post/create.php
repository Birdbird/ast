<?php
$this->breadcrumbs=array(
	'文章'=>array('admin'),
	'添加文章',
);

// $this->menu=array(
// 	array('label'=>'List Post', 'url'=>array('index')),
// 	array('label'=>'Manage Post', 'url'=>array('admin')),
// );
?>

<h1>添加文章</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>