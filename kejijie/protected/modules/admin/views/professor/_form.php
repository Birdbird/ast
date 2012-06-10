<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'professor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span>项为必填项</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intro'); ?>
		<?php echo $form->textArea($model,'intro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="row">
		<?php
		$this->widget('ext.suploadify.SUploadify',array(
			'uploader'=>$this->createUrl('/admin/file/img'),
			'options'=>array(
				'buttonText'=> $model->img ? '更换照片':'上传照片',
				'height'=>16,
				'width'=>80,
				'onUploadSuccess'=>'js:function(file, data, response){$("#thumbnail").html(data);}',
				// 'onUploadError' => 'js:function(file, errorCode, errorMsg, errorString){console.log(errorString);}',
			),
		));
		?>
	<span id="thumbnail">
	<?php if ($model->img): ?>
		照片：<?php echo CHtml::image(Yii::app()->baseUrl.'/upload/touxiang/'.$model->img) ?>
	<?php endif ?>
	</span>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '提交' : '保存修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->