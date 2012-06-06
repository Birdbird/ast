<h3>精品推荐</h3>
<ul>
	<?php foreach ($this->topNews as $top): ?>
		<li><?php echo CHtml::link(mb_substr($top->title, 0,$this->length),array('post/view','id'=>$top->id),array('title'=>$top->title)) ?></li>
	<?php endforeach ?>
</ul>
<h3>热门文章</h3>
<ul>
	<?php foreach ($this->hotNews as $hot): ?>
		<li><?php echo CHtml::link(mb_substr($hot->title, 0,$this->length),array('post/view','id'=>$hot->id),array('title'=>$hot->title)) ?></li>
	<?php endforeach ?>
</ul>