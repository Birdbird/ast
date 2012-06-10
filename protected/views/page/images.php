<div class="span12">
	<div class="widget round">
		<ul class="more-image">
			<?php foreach ($album->images as $albumImage): ?>
			<li><a href="<?php echo Yii::app()->baseUrl.'/upload/'.$albumImage->image ?>" rel="prettyPhoto[album]" title="<?php echo $albumImage->description ?>">
				<img src="<?php echo Yii::app()->baseUrl.'/upload/'.$albumImage->image ?>"/>
				<span><?php echo mb_substr($albumImage->description, 0,8) ?></span>
			</a></li>
			<?php endforeach ?>
		</ul>

	</div>
</div>