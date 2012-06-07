<div class="span4">
	<div class="widget round">
		<h3>最新视频</h3>
		<embed src="http://player.youku.com/player.php/Type/Folder/Fid/3685976/Ob/1/sid/XMTM1ODQ5MzE2/v.swf" quality="high" width="250" height="200" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash" style="margin-left:10px"></embed>
	</div>
	<div class="widget round">
		<h3>最新公告<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>54)) ?></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'54',
			'length'=>14,
			'lines'=>5,
			'showDate'=>true,
		)); ?>
	</div>
</div>
<div class="span8">
	<div id="slideshow">
		<div class="flexslider flash-control">
		   <?php
			$this->widget('SlideShow',array(
				'slideID'=>11,
				'id'=>'slideshow11',
				// 'htmlOptions'=>array('class'=>'theme-default'),
			));
			?>
		</div>
	</div>
	<div class="widget round">
		<h3>热门推荐</h3>
		<ul class="hot-click">
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k01.jpg" alt="image"/></a><p>This is a test image1</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k02.jpg" alt="image"/></a><p>This is a test image2</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k03.jpg" alt="image"/></a><p>This is a test image3</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k04.jpg" alt="image"/></a><p>This is a test image4</p></li>
		</ul>	
	</div>
	<div class="widget round">
		<h3>科普图吧<span class="more-only"><a href="more-images.html">更多>></a></span></h3>
		<ul class="hot-click">
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k06.jpeg" alt="image"/></a><p>This is a test image1</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k07.jpg" alt="image"/></a><p>This is a test image2</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k08.jpg" alt="image"/></a><p>This is a test image3</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k09.jpg" alt="image"/></a><p>This is a test image4</p></li>
		</ul>
	</div>
	<div class="widget round">
		<h3>科普游戏<span class="more-only"><a href="<?php echo $this->createUrl('page/game') ?>">更多>></a></span></h3>
		<ul class="hot-click">
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/g01.jpg" alt="image"/></a><p>This is a test image1</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/g02.jpg" alt="image"/></a><p>This is a test image2</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/g03.jpg" alt="image"/></a><p>This is a test image3</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/g04.jpg" alt="image"/></a><p>This is a test image4</p></li>
		</ul>
	</div>
	<div class="widget round">
		<h3>科普电影<span class="more-only"><a href="<?php echo $this->createUrl('page/video') ?>">更多>></a></span></h3>
		<ul class="hot-click">
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k01.jpg" alt="image"/></a><p>This is a test image1</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k02.jpg" alt="image"/></a><p>This is a test image2</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k03.jpg" alt="image"/></a><p>This is a test image3</p></li>
			<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k04.jpg" alt="image"/></a><p>This is a test image4</p></li>
		</ul>
	</div>
</div>