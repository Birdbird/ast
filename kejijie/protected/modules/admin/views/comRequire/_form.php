<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'com-require-form',
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
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'charge'); ?>
		<?php echo $form->textField($model,'charge',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'charge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'charge_tel'); ?>
		<?php echo $form->textField($model,'charge_tel',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'charge_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_tel'); ?>
		<?php echo $form->textField($model,'contact_tel',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contact_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip_code'); ?>
		<?php echo $form->textField($model,'zip_code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'zip_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'require'); ?>
		<?php echo $form->textField($model,'require',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'require'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tec_require'); ?>
		<?php echo $form->textArea($model,'tec_require',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tec_require'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forecast'); ?>
		<?php echo $form->textArea($model,'forecast',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'forecast'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_intro'); ?>
		<?php echo $form->textArea($model,'com_intro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'com_intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '提交' : '保存修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->