<div class="require">
	<div class="company-title round">
		<h3>项目需求</h3>
	</div>
</div>
<div class="widget round content-list">
	<ul>
		<li class="projectfirst">公司名称<span class="projectlist">项目需求</span></li>
		<?php foreach ($news as $newsItem): ?>
		<li>
			<?php echo CHtml::link(mb_substr($newsItem->name,0,20),array('projectPost/view','id'=>$newsItem->id),array('title'=>$newsItem->name)) ?>
			<span class="projectlist">
				<?php echo CHtml::link(mb_substr($newsItem->require,0,20),array('projectPost/view','id'=>$newsItem->id),array('title'=>$newsItem->require)) ?>
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