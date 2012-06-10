<?php foreach ($sorts as $sort): ?>
	<?php if (count($sort->companies)): ?>
		<div class="listcom">
			<div class="company-title comlist">    
				<h3><?php echo $sort->name ?><span><?php echo CHtml::link('更多>>',array('site/companys','id'=>$sort->id)) ?></span></h3>
			</div>
			<ul>
				<?php foreach ($sort->companies(array('limit'=>5)) as $company): ?>
					<li><a href="<?php echo $this->createUrl('site/company',array('id'=>$company->id)) ?>">
						<?php if ($company->thumbnail): ?>
							<img src="<?php echo Yii::app()->baseUrl.'/upload/company/'.$company->thumbnail ?>"></a>	
						<?php else: ?>
							<img src="<?php echo Yii::app()->baseUrl.'/upload/company/default.jpg' ?>"></a>
						<?php endif ?>						
						<span><?php echo $company->name ?></span>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	<?php endif ?>
<?php endforeach ?>