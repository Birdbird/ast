<div class="require">
	<div class="company-title round">
		<h3>专家教授海门行</h3>
	</div>
	<?php foreach ($professors as $professor): ?>
		<div class="list1">
			<a href="<?php echo $this->createUrl('site/prointro',array('id'=>$professor->id)) ?>">
				<?php if ($professor->img): ?>
					<img src="<?php echo Yii::app()->baseUrl.'/upload/touxiang/'.$professor->img ?>"></a>
				<?php else: ?>
					<img src="<?php echo Yii::app()->baseUrl.'/upload/touxiang/default.jpg' ?>"></a>
				<?php endif ?>
				
			<span><?php echo $professor->name ?></span>
		</div>
	<?php endforeach ?>
</div>
<div class="fenye">
	<?php $this->widget('CLinkPager', array(
		'header'=>'',
	    'pages' => $pagination,
	    'nextPageLabel'=>'>',
	    'prevPageLabel'=>'<',
	)) ?>
</div>