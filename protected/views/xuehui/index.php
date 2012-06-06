<div class="span3">
	<div class="widget round xuehui-left">
		<?php $this->widget('XuehuiSide') ?>
	</div>
</div>
<div class="span9">
	<div class="widget round content-list">
		<ul>
			<?php foreach ($xuehuiPosts as $xuehuiPost): ?>
			<li><a href="<?php echo $this->createUrl('xuehui/intro',array('id'=>$xuehuiPost->xuehui_id)) ?>" class="xuehui-name">
				[<?php echo $xuehuiPost->xuehui->name ?>]</a>
				<?php echo CHtml::link($xuehuiPost->title,array('xuehui/post','id'=>$xuehuiPost->id)) ?>
				<span><?php echo date('Y-m-d',$xuehuiPost->create_time)?></span></li>
			<?php endforeach ?>
		</ul>
		<p class="list-foot"><a href="#">[首页]</a><a href="#">上一页</a>[1]<a href="">下一页</a><a href="">[末尾]</a></p>
	</div>
</div>