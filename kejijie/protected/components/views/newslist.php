<ul>
	<?php foreach ($this->news as $newsItem): ?>
		<li>
		<?php
		$shortTitle = mb_strlen($newsItem->title) > $this->length ? mb_substr($newsItem->title,0,$this->length).'…' : $newsItem->title;
		 echo CHtml::link($shortTitle,array('post/view','id'=>$newsItem->id),array('title'=>$newsItem->title)) 
		?>
		<?php if ($this->showDate): ?>
			<span><?php echo date('Y-m-d',$newsItem->create_time) ?></span>
		<?php endif ?>
		</li>
	<?php endforeach ?>
</ul>