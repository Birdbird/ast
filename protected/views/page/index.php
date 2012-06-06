<div class="span4">
	<div class="theme-default">
	<?php
	$this->widget('SlideShow',array(
		'slideID'=>1,
		'id'=>'slideshow1',
		'config'=>array('controlNav'=>true),
		// 'htmlOptions'=>array('class'=>'theme-default'),
	));
	?>
	</div>
</div>
<div class="span4">
	<div class="widget widget-notice">
		<h3>要闻快递</h3>
		<ul>
			<?php $this->widget('NewsList',array('categoryID'=>90,'lines'=>9,'length'=>20)) ?>
		</ul>
	</div>
</div>
<div class="span4">
	<div class="widget widget-notice">
		<h3>最新公告</h3>
		<ul id="scoll-notice">
			<li><a href="#">全省地方科协科普工作会议在苏州召开</a></li>
			<li><a href="#">苏州制定实施《市级科普经费专项资金</a></li>
			<li><a href="#">锡城青少年机器人竞赛创意十足</a></li>
			<li><a href="#">南通市科协“三解三促”农资帮扶活动</a></li>
			<li><a href="#">南通市科协向院士“借脑” 强势推动经</a></li>
			<li><a href="#">海州区各乡镇街道制定下发《全民科学素...</a></li>
			<li><a href="#">泰州市委办、市政府办联合印发《泰州市...</a></li>
			<li><a href="#">扬州市科协深入开展领导干部“三解三促</a></li>
			<li><a href="#">全省地方科协科普工作会议在苏州召开</a></li>
			<li><a href="#">南通市科协向院士“借脑” 强势推动经</a></li>
			<li><a href="#">海州区各乡镇街道制定下发《全民科学素...</a></li>
			<li><a href="#">泰州市委办、市政府办联合印发《泰州市...</a></li>
			<li><a href="#">扬州市科协深入开展领导干部“三解三促</a></li>
			<li><a href="#">全省地方科协科普工作会议在苏州召开</a></li>
		</ul>
	</div>
</div>
</div>
<div class="round scoll-text">
	<ul> 
		<li>热烈庆祝海门市公众与科学网改版</li> 
		<li>热烈欢迎上级领导来海门市视察，参观，访问</li> 
		<li>预祝海门市第一届科技节圆满成功</li> 
	</ul> 
</div>
<div>
<a href="suzhi.html"><img src="<?php echo Yii::app()->baseUrl ?>/image/suzhi.png" alt="news title" class="little-titles"/></a>
<a href="http://www.js5461.org/"><img src="<?php echo Yii::app()->baseUrl ?>/image/qkj.png" alt="news title" class="little-titles"/></a>
<a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/spzx.png" alt="news title" class="little-titles"/></a>
<a href="country.html"><img src="<?php echo Yii::app()->baseUrl ?>/image/kphn.png" alt="news title" class="little-titles"/></a>
<a href="country.html"><img src="<?php echo Yii::app()->baseUrl ?>/image/kpym.png" alt="news title" class="little-titles"/></a>
<a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/kjgz.png" alt="news title" class="little-titles"/></a>
<a href="haizhi.html"><img src="<?php echo Yii::app()->baseUrl ?>/image/hzjh.png" alt="news title" class="little-titles"/></a>
<a href="zhengce.html"><img src="<?php echo Yii::app()->baseUrl ?>/image/kpfg.png" alt="news title" class="little-titles"/></a>		
</div>

<div class="row">
<div class="span8">
  <div class="widget widget-theme widget2">
		<h3>学会动态<span class="more-only"><a href="#">更多>></a></span></h3>
		<div class="span4 one-pic">
			<a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/1.jpg" alt="test image 1"/></a><cite><a href="#">全省地方科协科普工作会议在苏州召开</a></cite>
		</div>
		<div class="span4 widget-content">
    		<?php $this->widget('XuehuiList',array('lines'=>9,'length'=>20)) ?>
		</div>
	</div>
  <div class="widget widget-theme widget2">
		<h3>科普之窗<span class="more-only"><a href="#">更多>></a></span></h3>
		<div class="span4 one-pic">
			<a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/pic01.jpg" alt="image 1"/></a><cite><a href="#">全省地方科协科普工作会议在苏州召开</a></cite>
		</div>
		<div class="span4 widget-content">
    	<?php $this->widget('IndexList',array('categoryIDs'=>array(65,66),'lines'=>9,'length'=>20)) ?>
		</div>
	</div>
</div>
<div class="span4">
	<div class="widget widget-side" id="widget1">
		<h3>身边科学<span class="more-only"><a href="#">更多>></a></span></h3>
		<div class="right-list">
			<ul>
				<li class="clearfix"><img src="<?php echo Yii::app()->baseUrl ?>/image/c02.jpg" alt="test image"/>
				<div class="pic-detatil">
					<h3><a href="#">别让晚睡成为一种病</a></h3>
					<p>每每想到早睡就是浪费生命，我总是强迫自己困了也不睡，这样可以多看些...</p>
				</div>
				</li>
				<li class="clearfix"><img src="<?php echo Yii::app()->baseUrl ?>/image/c01.jpg" alt="test image"/>
				<div class="pic-detatil">
					<h3><a href="#">光照胎教”很不靠谱</a></h3>
					<p>最近一段时间，一些育儿网站上“光照胎教”被炒得火热，一些健康频道还打出...</p>
				</div>
				</li>
				<li class="clearfix"><img src="<?php echo Yii::app()->baseUrl ?>/image/t05.jpg" alt="test image"/>
				<div class="pic-detatil">
					<h3><a href="#">家庭节能小常识</a></h3>
					<p>最近一段时间，一些育儿网站上“光照胎教”被炒得火热，一些健康频道还打出...</p>
				</div>
				</li>
				<li class="clearfix"><img src="<?php echo Yii::app()->baseUrl ?>/image/t01.jpg" alt="test image"/>
				<div class="pic-detatil">
					<h3><a href="#">生活小常识</a></h3>
					<p>最近一段时间，一些育儿网站上“光照胎教”被炒得火热，一些健康频道还打出...</p>
				</div>
				</li>
				<li class="clearfix"><img src="<?php echo Yii::app()->baseUrl ?>/image/t02.jpg" alt="test image"/>
				<div class="pic-detatil">
					<h3><a href="#">水果的妙用</a></h3>
					<p>最近一段时间，一些育儿网站上“光照胎教”被炒得火热，一些健康频道还打出...</p>
				</div>
				</li>
				<li class="clearfix"><img src="<?php echo Yii::app()->baseUrl ?>/image/t05.jpg" alt="test image"/>
				<div class="pic-detatil">
					<h3><a href="#">家庭节能小常识</a></h3>
					<p>最近一段时间，一些育儿网站上“光照胎教”被炒得火热，一些健康频道还打出...</p>
				</div>
				</li>
				<li class="clearfix"><img src="<?php echo Yii::app()->baseUrl ?>/image/t01.jpg" alt="test image"/>
				<div class="pic-detatil">
					<h3><a href="#">生活小常识</a></h3>
					<p>最近一段时间，一些育儿网站上“光照胎教”被炒得火热，一些健康频道还打出...</p>
				</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="span6">
	<div class="widget-theme widget widget2 one-pic">
		<h3>海智计划<span class="more-only"><a href="#">更多>></a></span></h3>
		<div class="span2">
			<ul class="images">
				<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/pic01.jpg" alt="test image 1"/></a>
					<cite><a href="#">李源潮“七个要”促进...</a></cite>
				</li>
				<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/pic02.jpg" alt="test image 2"/></a>
					<cite><a href="#">“海智计划”对接会引...</a></cite>
				</li>
			</ul>
		</div>
		<div class="span4 widget3 ">
			<ul>
				<li><a href="#">李源潮“七个要”促进重大人才工程“落地生根”</a></li>
				<li><a href="#">中国启动最高级别人才计划 吸引海归回国效力</a></li>
				<li><a href="#">“海智计划”对接会引来近百“海归”</a></li>
				<li><a href="#">第一批“外专千人计划”申报工作开始启动</a></li>
				<li><a href="#">2011年海外赤子为藏服务行动计划启动</a></li>
				<li><a href="#">2011苏州国际精英创业周7月10日隆重开幕</a></li>
				<li><a href="#">科协八大代表建言高层次创新人才培养</a></li>
				<li><a href="#">中国科学院引进海外高层次人才管理实施细则</a></li>
				<li><a href="#">科协八大代表建言高层次创新人才培养</a></li>
				<li><a href="#">中国科学院引进海外高层次人才管理实施细则</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="span6">
	<div class="widget widget-theme widget2">
		<h3>数字科技馆<span class="more-only"><a href="#">更多>></a></span></h3>
		<div class="pic-row">
			<div class="slide-title"><p>科普视频</p></div>
			<div class="science-pics">
				<ul class="images-more">
					<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/<?php echo Yii::app()->baseUrl ?>/image/k01.jpg" alt="test image 1"/></a>
					</li>
					<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k02.jpg" alt="test image 2"/></a>
					</li>
					<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/k03.jpg" alt="test image 1"/></a>
					</li>
					<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/t07.jpg" alt="test image 2"/></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="pic-row">
			<div class="slide-title"><p>科普小游戏</p></div>
			<div class="science-pics">
				<ul class="images-more">
					<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/g01.jpg" alt="test image 1"/></a>
					</li>
					<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/g02.jpg" alt="test image 2"/></a>
					</li>
					<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/g03.jpg" alt="test image 1"/></a>
					</li>
					<li><a href="#"><img src="<?php echo Yii::app()->baseUrl ?>/image/t08.jpg" alt="test image 2"/></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>