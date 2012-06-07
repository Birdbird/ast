<div class="span8">
	<div class="widget round">
		<div class="flexslider lastnews">
		 <?php
			$this->widget('SlideShow',array(
			'slideID'=>3,
			'id'=>'slideshow1',
			// 'htmlOptions'=>array('class'=>'theme-default'),
		));
		?>
		</div>
		<div class="haizhi-news">
			<h3>海智新闻<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>44)) ?></span></h3>
			<?php $this->widget('NewsList',array(
				'categoryID'=>'44',
				'length'=>18,
				'lines'=>7
			)); ?>
		</div>
	</div>
</div>

<div class="span4">
<div class="widget widget-notice haizhi-notice">
	<h3>最新公告<span class="more-only"><a href="#">更多>></a></span></h3>
	<?php $this->widget('NewsList',array('categoryID'=>92,'lines'=>7,'length'=>18)) ?>
</div>
</div>
</div>
	<div class="row">
		<div class="span6">
			<div class="widget round content-list">
				<h3>工作动态<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>64)) ?></span></h3>
				<?php $this->widget('NewsList',array(
					'categoryID'=>'64',
					'length'=>24,
					'lines'=>7,
					'showDate'=>true,
				)); ?>
			</div>
		</div>
		<div class="span6">
			<div class="widget round content-list">
				<h3>海智简讯<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>46)) ?></span></h3>
				<?php $this->widget('NewsList',array(
					'categoryID'=>'46',
					'length'=>24,
					'lines'=>7,
					'showDate'=>true,
				)); ?>
			</div>
		</div>
	</div>
	<div class="news-big-image round">
		<?php
			$this->widget('SlideShow',array(
			'slideID'=>4,
			'id'=>'slideshow2',
			// 'htmlOptions'=>array('class'=>'theme-default'),
		));
		?>
	</div>
	<div class="row">
		<div class="span4">
			<div class="widget round content-list">
				<h3>筑巢引凤<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>47)) ?></span></h3>
				<?php $this->widget('NewsList',array(
					'categoryID'=>'47',
					'length'=>13,
					'lines'=>7,
					'showDate'=>true,
				)); ?>
			</div>
		</div>
		<div class="span4">
			<div class="widget round content-list">
				<h3>金凤寻巢<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>48)) ?></span></h3>
				<?php $this->widget('NewsList',array(
					'categoryID'=>'48',
					'length'=>13,
					'lines'=>7,
					'showDate'=>true,
				)); ?>
			</div>
		</div>
		<div class="span4">
			<div class="widget round haizhi-links">
				<h3>相关链接</h3>
				<ul>
					<li><a href="#"><img src="image/haizhi01.jpg" alt="test country links images"/></a></li>
					<li><a href="#"><img src="image/haizhi02.jpg" alt="test country links images"/></a></li>
					<li><a href="#"><img src="image/haizhi03.jpg" alt="test country links images"/></a></li>
				</ul>
			</div>			
		</div>
</div>
	
<div class="widget round flash-left ">
<div class="bx_wrap"> 
   <div class="bx_container"> 
      <ul id="demo1"> 
          <li><img  alt="#" width="140" height="94" src="flash_image/s1.jpg"></li> 
          <li><img  alt="#" width="140" height="94" src="flash_image/s2.jpg"></li> 
          <li><img  alt="#" width="140" height="94" src="flash_image/s3.jpg"></li> 
          <li><img  alt="#" width="140" height="94" src="flash_image/s4.jpg"></li> 
          <li><img  alt="#" width="140" height="94" src="flash_image/s5.jpg"></li> 
          <li><img  alt="#" width="140" height="94" src="flash_image/s6.jpg"></li> 
          <li><img  alt="#" width="140" height="94" src="flash_image/s7.jpg"></li> 
       </ul> 
    </div> 
 </div>