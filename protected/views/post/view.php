<div class="span3">
	<div class="widget round">
		<?php $this->widget('HotList') ?>
	</div>
</div>
<div class="span9">
	<div class="widget round artical">
		<h3><?php echo $post->title ?></h3>
		<p>发稿时间:<?php echo date('Y-m-d',$post->create_time) ?></p>
		<div class="content-detail">
			<?php echo $post->content ?>
		</div>
		<div class="artical-footer">
			<p>
				<?php if ($post->prevPost): ?>
					<?php echo CHtml::link('上一篇：'.$post->prevPost->title,array('post/view','id'=>$post->prevPost->id)) ?>
				<?php endif ?>
			</p>
			<p>
			<?php if ($post->nextPost): ?>
				<?php echo CHtml::link('下一篇：'.$post->nextPost->title,array('post/view','id'=>$post->nextPost->id)) ?>
			<?php endif ?>
			</p>
		</div>
	</div>
</div>