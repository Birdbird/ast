<div class="span3">
	<div class="widget round xuehui-left">
		<?php $this->widget('XuehuiSide') ?>		
	</div>
</div>
<div class="span9">
	<div class="widget round artical">
		<h3><?php echo $post->title ?></h3>
		<p>发稿时间:<?php echo date('Y-m-d',$post->create_time) ?></p>
		<div class="content-detail">
			<?php echo $post->content ?>
		</div>
	</div>
</div>