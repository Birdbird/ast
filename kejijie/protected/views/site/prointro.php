<div class="intro-detail round">
	<div class="company-title round">
		<h3>【专家介绍】</h3>
	</div>
	<?php if ($prointro->img): ?>
		<img src="<?php echo Yii::app()->baseUrl.'/upload/touxiang_big/'.$prointro->img ?>">
	<?php else: ?>
		<img src="<?php echo Yii::app()->baseUrl.'/upload/touxiang_big/default.jpg' ?>">
	<?php endif ?>
	
	<div class="introduction">
		<p><?php echo nl2br($prointro->intro) ?></p>
	</div>
</div>