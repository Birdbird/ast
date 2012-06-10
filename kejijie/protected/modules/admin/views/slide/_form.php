<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
	//'enableClientValidation'=>true,
)); ?>
<p class="note"><span class="required">*</span>项必填</p>
<div class="row">
	<?php echo $form->labelEx($model,'name'); ?>
	<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo $form->error($model,'name'); ?>
</div>
<div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? '创建相册' : '保存修改'); ?>
</div>
<?php $this->endWidget(); ?>
</div>