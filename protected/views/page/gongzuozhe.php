<div class="span9">
	<div class="widget round ques-answer">
		<h3>建言献策</h3>
		<?php foreach ($requests as $request): ?>
		<div class="widget round answer-content">
			<div class="top-content">
				<span>来源：<?php echo $request->ip ?></span>
				<span>名字：<?php echo $request->nickname?$request->nickname:'匿名' ?></span>
				<span class="public-time"><?php echo date('Y-m-d',$request->create_time) ?></span>
			</div>
			<div class="ques">
				<p><span>问：</span><?php echo $request->content ?></p>
			</div>
			<div class="ques">
				<p>
				<?php if ($request->response): ?>
					<span>答：</span><?php echo $request->response->content ?>
				<?php else: ?>
					<span>暂无答复</span>
				<?php endif ?>
				</p>
			</div>
		</div>	
		<?php endforeach ?>
		
		<?php $this->widget('CLinkPager', array(
				'header'=>'',
		    'pages' => $pagination,
		)) ?>
		<div class="input-text">			
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'advise-form',
				'enableAjaxValidation'=>false,
			)); ?>

				<div class="row">
					<label>姓名(可选)</label>
					<?php echo $form->textField($model,'nickname',array('size'=>20,'maxlength'=>20)); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'content'); ?>
					<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>70)); ?>
					<?php echo $form->error($model,'content'); ?>
				</div>

				<div class="row buttons">
					<?php echo CHtml::submitButton('提交',array('class'=>'submit')); ?>
				</div>

			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>
<div class="span3">
	<div class="round link-luntan">
		<p><a href="#">海门公众与科学网论坛入口</a></p>
	</div>
	<div class="widget round">
		<?php $this->widget('HotList') ?>
	</div>
</div>