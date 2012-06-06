<div class="span3">
	<div class="widget round">
		<h3>精品推荐</h3>
		<ul>
			<li><a href="#">中国科协农技中心赴滇调研科...</a></li>
			<li><a href="#">中国科协、财政部联合实施“...</a></li>
			<li><a href="#">山西省委书记袁纯清称赞科...</a></li>
			<li><a href="#">徐延豪到山东省临沂市费县...</a></li>
			<li><a href="#">钱长本：古稀老农的科普情怀</a></li>
		</ul>
		<h3>热门文章</h3>
		<ul>
			<li><a href="#">黑龙江海伦科普大集送科普...</a></li>
			<li><a href="#">山西省科协科普惠农服务情...</a></li>
			<li><a href="#">山西省科协启动实施科普惠...</a></li>
			<li><a href="#">山东省乳山市“科普惠农专...</a></li>
			<li><a href="#">山西省晋中市祁县喜迎科普...</a></li>
			<li><a href="#">抓好三创一带 建立长效机...</a></li>
			<li><a href="#">新疆和田地区发挥科普带头...</a></li>
			<li><a href="#">阮毅：科研攻关结硕果 菇...</a></li>
			<li><a href="#">辛大元：农民致富的贴心人</a></li>
			<li><a href="#">于海霞：让科技之光成为富...</a></li>
		</ul>
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
		<div class="news-list">
		<h3>近期要闻</h3>
		<div class="flexslider lastnews">
		  <ul class="slides lastslides">
		    <li>
		      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/1.jpg" />
		    </li>
		    <li>
		      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/2.jpg" />
		    </li>
		    <li>
		      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/3.jpg" />
		    </li>
		    <li>
		      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/4.jpg" />
		    </li>
		  </ul>
		</div>
		<div class="news-dscription">
			<h3><a href="#">王兆国等领导为2007年度“科普惠农兴村计划”获奖代表颁奖</a></h3>
			<p>2008年1月15日，中国科协第七届全委会第三次会议暨2007年度“科普惠农兴村计划”颁奖仪式在北京召开。来自全国各省、自治区、直辖市的32位获奖代表应邀列席会议并参加颁奖仪式。中共中央政治局委员、全国人大常委会副委员长王兆国,全国人大常委会副委员长、中国科协主席韩启德,中国科协常务副主席、书记处第一书记邓楠等领导同志为2007年度“科普惠农兴村计划”获奖代表颁发了奖牌。</p>
		</div>	
	</div>
</div>
<div class="widget round">
	<div class="news-list">
		<h3>最新动态<span class="more-only"><a href="#">更多>></a></span></h3>	
		<ul>
			<li><a href="#">中国科协农技中心赴滇调研科普惠农项目</a><span>05-01</span></li>
			<li><a href="#">中国科协、财政部联合实施“基层科普行动计划”</a><span>05-01</span></li>
			<li><a href="#">山西省委书记袁纯清称赞科普惠农绿色通道</a><span>05-01</span></li>
			<li><a href="#">徐延豪到山东省临沂市费县考察科普惠农工作</a><span>05-01</span></li>
			<li><a href="#">全国科普惠农草莓种植技术协作网成立暨技术交流会在东海隆重召开</a><span>05-01</span></li>
			<li><a href="#">王兆国等领导为2007年度“科普惠农兴村计划”获奖代表颁奖</a><span>05-01</span></li>
		</ul>
	</div>
</div>
<div class="widget round">
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
	<div class="widget round">		
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
<div class="widget round">
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