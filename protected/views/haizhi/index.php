<div class="span8">
	<div class="widget round">
		<div class="flexslider lastnews">
		  <ul class="slides lastslides">
		    <li>
		      <img src="flash_image/1.jpg" />
		      <p class="flex-caption">黑龙江海伦科普大集送科普</p>
		    </li>
		    <li>
		      <img src="flash_image/2.jpg" />
		      <p class="flex-caption">山西省科协科普惠农服务情</p>
		    </li>
		    <li>
		      <img src="flash_image/3.jpg" />
		      <p class="flex-caption">山西省科协启动实施科普惠</p>
		    </li>
		    <li>
		      <img src="flash_image/4.jpg" />
		      <p class="flex-caption">山东省乳山市“科普惠农专</p>
		    </li>
		  </ul>
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
	<ul>
		<li><a href="#">中国科协农技中心赴滇调研科普惠...</a></li>
		<li><a href="#">中国科协、财政部联合实施“基层...</a></li>
		<li><a href="#">山西省委书记袁纯清称赞科普惠...</a></li>
		<li><a href="#">徐延豪到山东省临沂市费县考察...</a></li>
		<li><a href="#">钱长本：古稀老农的科普情怀</a></li>
		<li><a href="#">海州区各乡镇街道制定下发《全民...</a></li>
		<li><a href="#">泰州市委办、市政府办联《泰州市...</a></li>
	</ul>
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
		<img src="image/news_list.jpg" alt="test image"/>
	</div>
	<div class="row">
		<div class="span4">
			<div class="widget round">
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
			<div class="widget round">
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