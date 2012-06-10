<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'xuehui-post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span>项必填</p>

	<?php echo $form->errorSummary($model); ?>
    
	<div class="row">
		<?php echo $form->labelEx($model,'选择学会'); ?>
		<?php echo $form->dropDownList($model,'xuehui_id',CHtml::listData(Xuehui::model()->findAll(), 'id', 'name')); ?>
		<?php //echo $form->hiddenField($model,'xuehui_id') ?>
		<?php echo $form->error($model,'xuehui_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'标题'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'内容'); ?>
		<?php //echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); 
		$this->widget('application.extensions.cleditor.ECLEditor', array(
		        'model'=>$model,
		        'attribute'=>'content', //Model attribute name. Nome do atributo do modelo.
		        'options'=>array(
		            'width'=>'600',
		            'height'=>250,
		            'useCSS'=>true,
		        ),
		        'value'=>$model->content, //If you want pass a value for the widget. I think you will. Se você precisar passar um valor para o gadget. Eu acho irá.
		    ));
		?>
		
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '提交新文章' : '确认修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->