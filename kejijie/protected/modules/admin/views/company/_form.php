<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort_id'); ?>
		<?php echo $form->dropDownList($model,'sort_id',CHtml::listData(Sort::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'sort_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'links'); ?>
		<?php echo $form->textField($model,'links',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'links'); ?>
	</div>

	<div class="row">
		<?php
		$this->widget('ext.suploadify.SUploadify',array(
			'uploader'=>$this->createUrl('/admin/file/companyimg'),
			'options'=>array(
				'buttonText'=> $model->thumbnail ? '更换照片':'上传照片',
				'height'=>16,
				'width'=>80,
				'onUploadSuccess'=>'js:function(file, data, response){$("#thumbnail").html(data);}',
				// 'onUploadError' => 'js:function(file, errorCode, errorMsg, errorString){console.log(errorString);}',
			),
		));
		?>
	<span id="thumbnail">
	<?php if ($model->thumbnail): ?>
		照片：<?php echo CHtml::image(Yii::app()->baseUrl.'/upload/company/'.$model->thumbnail) ?>
	<?php endif ?>
	</span>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '提交' : '保存修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->