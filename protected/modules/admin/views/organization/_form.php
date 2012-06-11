<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organization-form',
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
		<?php echo $form->labelEx($model,'intro'); ?>
		<?php //echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); 
		$this->widget('application.extensions.cleditor.ECLEditor', array(
		        'model'=>$model,
		        'attribute'=>'intro', //Model attribute name. Nome do atributo do modelo.
		        'options'=>array(
		            'width'=>'600',
		            'height'=>250,
		            'useCSS'=>true,
		        ),
		        'value'=>$model->intro, //If you want pass a value for the widget. I think you will. Se você precisar passar um valor para o gadget. Eu acho irá.
		    ));
		?>
		
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '提交新内容' : '保存修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->