<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'xuehui-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span>项必填</p>

	<?php echo $form->errorSummary($model); ?>
  
	<div class="row">
		<?php echo $form->labelEx($model,'学会名称'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'学会介绍'); ?>
		<?php echo $form->textArea($model,'intro',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '保存新学会' : '确认修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->