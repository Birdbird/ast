<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'game-form',
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
		'uploader'=>$this->createUrl('/admin/file/gamethumbnail'),
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
		'uploader'=>$this->createUrl('/admin/file/game'),
		'options'=>array(
			'buttonText'=> $model->file ? '更换小游戏':'上传小游戏',
			'height'=>16,
			'width'=>80,
			'fileTypeDesc' => 'swf文件',
			'fileTypeExts' => '*.swf;',
			'onUploadSuccess'=>'js:function(file, data, response){$("#game").html(data);}',
			// 'onUploadError' => 'js:function(file, errorCode, errorMsg, errorString){console.log(errorString);}',
		),
	));
	?>
	<span id="game">
	<?php if ($model->file): ?>
		已上传
	<?php endif ?>
	</span>
	<?php echo $form->error($model,'file'); ?>
</div>

<div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? '提交新游戏' : '保存修改'); ?>
</div>

<?php $this->endWidget(); ?>
</div>