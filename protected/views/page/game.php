<?php foreach ($games as $game): ?>
<div class="span3">
	<div class="widget round media">
		<a href='http://local/ast/upload/game/<?php echo $game->file ?>?width=500&height=400' rel="prettyPhoto[flash]" title="<?php echo $game->description ?>"><img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $game->thumbnail ?>" alt="<?php echo $game->title ?>"><p><?php echo $game->title ?></p></a>
	</div>
</div>
<?php endforeach ?>