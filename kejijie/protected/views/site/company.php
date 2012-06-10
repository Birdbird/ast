<div class="company-intro">
	<div class="company-title round">
		<h3>企业介绍</h3>
	</div>
	<?php if ($company->thumbnail): ?>
		<img src="<?php echo Yii::app()->baseUrl.'/upload/company_big/'.$company->thumbnail ?>"> 	
	<?php else: ?>
		<img src="<?php echo Yii::app()->baseUrl.'/upload/company_big/default.jpg' ?>"> 
	<?php endif ?>	
	<div class="detail">
	<h3><?php echo $company->name ?></h3>
	<p><?php echo $company->links ?></p>
	<p><?php echo nl2br($company->description) ?></p>
</div>
</div>