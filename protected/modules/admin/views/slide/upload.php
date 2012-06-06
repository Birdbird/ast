<?php
$this->widget('ext.suploadify.SUploadify',array(
	'uploader'=>$this->createUrl('/admin/file/slide'),
	'options'=>array(
		// 'removeCompleted'=>false
		'buttonText'=>'选择图片上传',
		'height'=>20,
		'width'=>100,
	),
));

?>