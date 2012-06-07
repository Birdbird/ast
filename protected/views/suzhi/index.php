<div class="span9">
	<div class="widget round">
		<div class="lastnews">
		 <?php
			$this->widget('SlideShow',array(
				'slideID'=>9,
				'id'=>'slideshow7',
				// 'htmlOptions'=>array('class'=>'theme-default'),
			));
			?>
		</div>
		<div class="hotnews">
			<h3>热点新闻<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>32)) ?></span></h3>
			<h4><?php echo $important->title ?></h4>
			<?php echo mb_substr(strip_tags($important->content), 0,60) ?>
			<?php $this->widget('NewsList',array(
					'categoryID'=>'32',
					'length'=>25,
					'lines'=>6,
					'showDate'=>false,
				)); ?>
		</div>
	</div>
	<div class="row">
		<div class="span4">
			<div class="widget round content-list">
			<h3>媒体扫描<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>95)) ?></span></h3>
			<?php $this->widget('NewsList',array(
					'categoryID'=>'95',
					'length'=>25,
					'lines'=>6,
					'showDate'=>false,
				)); ?>
			</div>
		</div>
		<div class="span5">
			<div class="widget round content-list">
			<h3>工作动态<span class="more-only">	<?php echo CHtml::link('更多>>',array('post/category','id'=>34)) ?></span></h3>
				<?php $this->widget('NewsList',array(
					'categoryID'=>'34',
					'length'=>25,
					'lines'=>6,
					'showDate'=>false,
				)); ?>
			</div>
			</div>
		</div>
	</div>
<div class="span3">
	<div class="widget round">
		<h3>通知公告<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>35)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'35',
			'length'=>8,
			'lines'=>6,
			'showDate'=>true,
		)); ?>
	</div>
	<div class="widget round">
		<h3>文献资料<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>89)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'89',
			'length'=>8,
			'lines'=>9,
			'showDate'=>true,
		)); ?>
	</div>
</div>
</div>
<div>
<div class="widget round">
	<div class="recent-active lastslides">
	  <?php
		$this->widget('SlideShow',array(
			'slideID'=>10,
			'id'=>'slideshow8',
			// 'htmlOptions'=>array('class'=>'theme-default'),
		));
		?>
	</div>
</div>
</div>
<div class="row">
<div class="span12">
	<div class="widget round document">
		<h3>重要文件<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>40)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'40',
			'length'=>50,
			'lines'=>12,
			'showDate'=>true,
		)); ?>
	</div>
</div>