<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
	//'enableClientValidation'=>true,
)); ?>

	<p class="note"><span class="required">*</span>项为必填项</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
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
	
	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php //echo $form->dropDownList($model,'category_id',CHtml::listData(Category::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->hiddenField($model,'category_id') ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>
	<div class="row">
		<?php
		$this->widget('ext.suploadify.SUploadify',array(
			'uploader'=>$this->createUrl('/admin/file/attach'),
			'options'=>array(
				'buttonText'=>'上传附件',
				'height'=>16,
				'width'=>80,
				'onUploadSuccess'=>'js:function(file, data, response){$("#attaches").append("<li>"+data+"</li>");}',
				// 'onUploadError' => 'js:function(file, errorCode, errorMsg, errorString){console.log(errorString);}',
			),
		));
		?>
		<div>附件：</div>
		<ul id="attaches">
			<?php foreach ($model->attaches as $attach): ?>
			<li><?php echo CHtml::link($attach->name,Yii::app()->baseUrl.'/attach/'.$attach->file) ?></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="row">
		<?php
		$this->widget('ext.suploadify.SUploadify',array(
			'uploader'=>$this->createUrl('/admin/file/thumbnail'),
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
		缩略图：<?php echo CHtml::image(Yii::app()->baseUrl.'/upload/thumbnail/'.$model->thumbnail) ?>
	<?php endif ?>
	</span>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '提交新文章' : '保存修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->