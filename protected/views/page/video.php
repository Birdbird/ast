<?php foreach ($videos as $video): ?>
<div class="span3">
	<div class="widget round media">
		<a href='<?php echo Yii::app()->baseUrl ?>/player/gddflvplayer.swf?width=600&height=400&flashvars=vdo=<?php echo Yii::app()->baseUrl ?>/upload/video/<?php echo $video->file ?>' rel="prettyPhoto[flash]" title="<?php echo $video->description ?>"><img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $video->thumbnail ?>" alt="<?php echo $video->title ?>"><p><?php echo $video->title ?></p></a>
	</div>
</div>
<?php endforeach ?>