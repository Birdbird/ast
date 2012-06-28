<div class="span3">
	<div class="widget round">
		<?php $this->widget('HotList') ?>
	</div>
</div>
<div class="span9">
	<div class="widget round content-list">
		<ul>
			<?php foreach ($news as $newsItem): ?>
			<li>
				<?php echo CHtml::link(mb_substr($newsItem->title,0,40),array('post/view','id'=>$newsItem->id)) ?>
				<span class="news-time"><?php echo date('Y-m-d',$newsItem->create_time)?></span>
			</li>
			<?php endforeach ?>
		</ul>
		<?php $this->widget('CLinkPager', array(
				'header'=>'',
		    'pages' => $pagination,
		    'nextPageLabel'=>'>',
	    	'prevPageLabel'=>'<',
		)) ?>
	</div>
</div>