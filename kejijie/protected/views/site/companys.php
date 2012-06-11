<div class="listcom">
	<ul>
		<?php foreach ($sort->companies as $company): ?>
			<li><a href="<?php echo $this->createUrl('site/company',array('id'=>$company->id)) ?>">
				<?php if ($company->thumbnail): ?>
					<?php echo CHtml::image(Yii::app()->baseUrl.'/upload/company/'.$company->thumbnail) ?></a>	
				<?php else: ?>
					<?php echo CHtml::image(Yii::app()->baseUrl.'/upload/company/default.jpg') ?></a>
				<?php endif ?>			
				<span><?php echo $company->name ?></span>
			</li>
		<?php endforeach ?>
	</ul>
</div>