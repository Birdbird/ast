<div class="top-content">
	<span>来源：<?php echo $request->ip ?>    </span>
	<span>名字：<?php echo $request->nickname?$request->nickname:'匿名' ?>    </span>
	<span class="public-time">发送时间:<?php echo date('Y-m-d',$request->create_time) ?></span>
</div>

<div style="margin:15px 0;">
	建言献策：
	<p style="padding:5px;">
		<?php echo $request->content ?>
	</p>
<div>

<?php if ($request->response): ?>
<div style="margin:15px 0;">
	回复：
	<p style="padding:5px;">
		<?php echo $request->response->content ?>
	</p>
<div>
<?php endif ?>
	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'response-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?><br/>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>70)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	<?php echo CHtml::hiddenField('Response[request_id]',$request->id) ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton('提交',array('class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>