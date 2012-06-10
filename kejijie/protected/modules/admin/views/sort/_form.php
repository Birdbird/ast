<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sort-form',
	'enableAjaxValidation'=>false,
	'action'=>array('create'),
)); ?>

	<p class="note"><span class="required">*</span>项必填</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
		<?php echo CHtml::submitButton($model->isNewRecord ? '提交  ' : '保存修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->