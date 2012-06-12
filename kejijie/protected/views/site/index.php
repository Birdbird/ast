<div class="top-news widget">
	<div class="fill-width">
		<?php
		$this->widget('SlideShow',array(
			'slideID'=>2,
			'id'=>'slideshow_index',
			//'config'=>array('width'=>'430px','height'=>'200px')
			// 'htmlOptions'=>array('class'=>'theme-default'),
		));
		?>
	</div>
	<div class="top-news-content">
		<h3><?php echo CHtml::link($latest->title,array('post/view','id'=>$latest->id)) ?></h3>
		<p><?php echo mb_substr(strip_tags($latest->content),0,125) ?></p>
	</div>
</div>
<div class="videos widget">
	<div class="name">
		<h3>在线视频<span><?php echo CHtml::link('更多>>',array('site/video','id'=>5),array('class'=>'more')) ?></span></h3>
	</div>
		<ul id="video-list">
			<?php foreach ($videos as $video): ?>
			<li><a href="<?php echo $this->createUrl('site/video') ?>"><img src="<?php echo Yii::app()->baseUrl.'/upload/thumbnail/'.$video->thumbnail ?>">
			<span><?php echo $video->title ?></span>	
			</a></li>	
			<?php endforeach ?>
		</ul>
</div>
<div class="news1">
	<div class="name">
		<h3>项目成果<span><?php echo CHtml::link('更多>>',array('post/category','id'=>5),array('class'=>'more')) ?></span></h3>
	</div>	
		<?php $this->widget('NewsList',array(
			'categoryID'=>'5',
			'length'=>18,
			'lines'=>7,
			'showDate'=>false,
		)); ?>
</div>
<div class="news1">
	<div class="name">
		<h3>企业需求<span><?php echo CHtml::link('更多>>',array('projectPost/category'),array('class'=>'more')) ?></span></h3>
	</div>
	<ul>
	<?php foreach ($requires as $require): ?>
		<li><?php echo CHtml::link(mb_substr($require->require,0,20), array('projectPost/view','id'=>$require->id),array('title'=>'['.$require->name.']'.$require->require)) ?></li>
	<?php endforeach ?>
	</ul>
</div>
