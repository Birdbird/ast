<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'video-form',
	'enableAjaxValidation'=>false,
	//'enableClientValidation'=>true,
)); ?>
<p class="note"><span class="required">*</span>项为必填项</p>
<div class="row">
	<?php echo $form->labelEx($model,'title'); ?>
	<?php echo $form->textField($model,'title',array('size'=>64,'maxlength'=>64)); ?>
	<?php echo $form->error($model,'title'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'description'); ?>
	<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	
	<?php echo $form->error($model,'description'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'thumbnail'); ?>
	<?php
	$this->widget('ext.suploadify.SUploadify',array(
		'uploader'=>$this->createUrl('/admin/file/videothumbnail'),
		'options'=>array(
			'buttonText'=> $model->thumbnail ? '更换缩略图':'上传缩略图',
			'height'=>16,
			'width'=>80,
			'onUploadSuccess'=>'js:function(file, data, response){$("#thumbnail").html(data);}',
			// 'onUploadError' => 'js:function(file, errorCode, errorMsg, errorString){console.log(errorString);}',
		),
	));
	?>
<span id="thumbnail">
<?php if ($model->thumbnail): ?>
	<?php echo CHtml::image(Yii::app()->baseUrl.'/upload/thumbnail/'.$model->thumbnail) ?>
<?php endif ?>
</span>
	<?php echo $form->error($model,'thumbnail'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'file'); ?>
	<?php
	$this->widget('ext.suploadify.SUploadify',array(
		'uploader'=>$this->createUrl('/admin/file/video'),
		'options'=>array(
			'buttonText'=> $model->file ? '更换视频':'上传视频',
			'height'=>16,
			'width'=>80,
			'fileTypeDesc' => 'Flv文件',
			'fileTypeExts' => '*.flv;',
			'onUploadSuccess'=>'js:function(file, data, response){$("#video").html(data);}',
			// 'onUploadError' => 'js:function(file, errorCode, errorMsg, errorString){console.log(errorString);}',
		),
	));
	?>
	<span id="video">
	<?php if ($model->file): ?>
		已上传
	<?php endif ?>
	</span>
	<?php echo $form->error($model,'file'); ?>
</div>

<div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? '提交新视频' : '保存修改'); ?>
</div>

<?php $this->endWidget(); ?>
</div>