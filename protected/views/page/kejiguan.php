<div class="span4">
	<div class="widget round newsvideo">
		<h3>最新视频</h3>
		<h4><?php echo CHtml::link(mb_substr($videos->title, 0, 12),array('post/video'),array('title'=>$videos->title)) ?></h4>
		<a href="<?php echo $this->createUrl('page/video') ?>"><img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $videos->thumbnail ?>" width="150" height="100"></a>
	</div>
	<div class="widget round">
		<h3>最新公告<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>54)) ?></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'54',
			'length'=>14,
			'lines'=>5,
			'showDate'=>true,
		)); ?>
	</div>
</div>
<div class="span8">
	<div id="slideshow">
		<div class="flexslider flash-control">
		   <?php
			$this->widget('SlideShow',array(
				'slideID'=>11,
				'id'=>'slideshow11',
				// 'htmlOptions'=>array('class'=>'theme-default'),
			));
			?>
		</div>
	</div>
	<div class="widget round">
		<h3>科普图吧<span class="more-only"><a href="<?php echo $this->createUrl('page/images') ?>">更多>></a></span></h3>
		<ul class="hot-click">
			<?php foreach ($album->images(array('limit'=>4)) as $image): ?>
				<li><a href="<?php echo Yii::app()->baseUrl.'/upload/'.$image->image ?>" rel="prettyPhoto">
					<img src="<?php echo Yii::app()->baseUrl.'/upload/'.$image->image ?>">
					<p><?php echo mb_substr($image->description,0,7) ?></p>
				</a></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="widget round">
		<h3>科普游戏<span class="more-only"><a href="<?php echo $this->createUrl('page/game') ?>">更多>></a></span></h3>
		<ul class="hot-click">
			<?php foreach ($games as $game): ?>
				<li><a href="<?php echo $this->createUrl('page/game') ?>">
					<img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $game->thumbnail ?>">
				</a></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="widget round">
		<h3>科普电影<span class="more-only"><a href="<?php echo $this->createUrl('page/video') ?>">更多>></a></span></h3>
		<ul class="hot-click">
			<?php foreach ($videoitems as $video): ?>
				<li><a href="<?php echo $this->createUrl('page/video') ?>">
					<img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $video->thumbnail ?>"></a></li>
			<?php endforeach ?>
		</ul>
	</div>
</div>