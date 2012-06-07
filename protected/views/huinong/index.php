<div class="span3">
	<div class="widget round">
		<?php $this->widget('HotList') ?>
	</div>
	<div class="widget round">
		<h3>友情链接</h3>
		<ul>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/cou_link01.gif" alt="test country links images"/></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/cou_link02.gif" alt="test country links images"/></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/cou_link03.gif" alt="test country links images"/></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/cou_link04.gif" alt="test country links images"/></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/cou_link05.gif" alt="test country links images"/></a></li>
		</ul>					
	</div>
</div>
<div class="span9">
<div class="widget round">
	<h3>近期要闻</h3>
	<div class="flexslider lastnews">
	  <?php
	$this->widget('SlideShow',array(
	'slideID'=>2,
	'id'=>'slideshow5',
	// 'htmlOptions'=>array('class'=>'theme-default'),
	));
	?>
	</div>
	<div class="news-dscription">
		<h4><?php echo CHtml::link(mb_substr($important->title, 0,25),array('post/view','id'=>$important->id)) ?></h4>
		<?php echo mb_substr(strip_tags($important->content), 0,200) ?>
	</div>	
</div>
<div class="widget round">
	<div class="news-list">
		<h3>最新动态</h3>
		<ul>
		<?php foreach ($posts as $post): ?>
			<li><?php echo CHtml::link(mb_substr($post->title,0,40), array('post/view','id'=>$post->id)) ?><span><?php echo date('Y-m-d',$post->create_time)?></span></li>
		<?php endforeach ?>
		</ul>
	</div>
</div>
<div class="widget round controll-height">
	<div class="news-list">
		<h3>通知通告<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>16)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'16',
			'length'=>42,
			'lines'=>7,
			'showDate'=>true,
		)); ?>
	</div>
	</div>
	<div class="widget round controll-height">		
	<div class="news-list">
		<h3>荣誉之窗<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>18)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'18',
			'length'=>42,
			'lines'=>7,
			'showDate'=>true,
		)); ?>
	</div>
</div>
<div class="widget round controll-height">
	<div class="news-list">
		<h3>下载中心<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>19)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'19',
			'length'=>42,
			'lines'=>7,
			'showDate'=>true,
		)); ?>
	</div>
	</div>
</div>