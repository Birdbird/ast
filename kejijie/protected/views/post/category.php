<div class="require">
	<div class="company-title">
		<h3><?php echo $category->name ?></h3>
	</div>
</div>
<div class="widget round content-list">
	<ul>
		<?php foreach ($news as $newsItem): ?>
		<li>
			<?php echo CHtml::link(mb_substr($newsItem->title,0,40),array('post/view','id'=>$newsItem->id)) ?>
			<span class="news-time">
				<?php if ($category->id == 3): ?>
					<?php echo $newsItem->author ?>
				<?php else: ?>
					<?php echo date('Y-m-d',$newsItem->create_time)?>
				<?php endif ?>
			</span>
		</li>
		<?php endforeach ?>
	</ul>
	</div>
	<div class="fenye">
		<?php $this->widget('CLinkPager', array(
			'header'=>'',
		    'pages' => $pagination,
		    'nextPageLabel'=>'>',
		    'prevPageLabel'=>'<',
		)) ?>
	</div>