<?php
$this->menu=array(
	array('label'=>'管理滚动字幕', 'url'=>array('admin')),
	array('label'=>'新建滚动字幕', 'url'=>array('create')),
);
?>

<h1>更新滚动字幕 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>