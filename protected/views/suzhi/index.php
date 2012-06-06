<div class="span9">
	<div class="widget round">
		<div class="flexslider lastnews">
		  <ul class="slides lastslides">
		    <li>
		      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/1.jpg" />
		      <p class="flex-caption">黑龙江海伦科普大集送科普</p>
		    </li>
		    <li>
		      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/2.jpg" />
		      <p class="flex-caption">山西省科协科普惠农服务情</p>
		    </li>
		    <li>
		      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/3.jpg" />
		      <p class="flex-caption">山西省科协启动实施科普惠</p>
		    </li>
		    <li>
		      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/4.jpg" />
		      <p class="flex-caption">山东省乳山市“科普惠农专</p>
		    </li>
		  </ul>
		</div>
		<div class="hotnews">
			<h3>热点新闻<span class="more-only"><a href="#">更多>></a></span></h3>
			<h4>江苏省召开全民科学素质工作领导小组第</h4>
			<p> 5月18日，江苏省全民科学素质工作领导小组第六次会议在南京科技馆召开。省全民科学素质工作领导小组组长、副省长何权出席会议并作重要讲话。</p>
			<ul>
				<li><a href="#">关于报送2011年度项目完成报告...</a></li>
				<li><a href="#">关于报送2011年度海智计划工作...</a></li>
				<li><a href="#">关于中国科协“海外智力为国服务行...</a></li>
				<li><a href="#">关于制定海智计划工作基地建设规划...</a></li>
				<li><a href="#">关于召开中国科协海智计划工作基地...</a></li>
				<li><a href="#">关于征集各地方人才和项目需求的通...</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="span4">
			<div class="widget round">
			<h3>媒体扫描<span class="more-only"><a href="#">更多>></a></span></h3>
			<ul>
				<li><a href="#">全省地方科协科普工作会议在苏州召开</a></li>
				<li><a href="#">苏州制定实施《市级科普经费专项资金</a></li>
				<li><a href="#">锡城青少年机器人竞赛创意十足</a></li>
				<li><a href="#">南通市科协“三解三促”农资帮扶活动</a></li>
				<li><a href="#">南通市科协向院士“借脑” 强势推动经</a></li>
				<li><a href="#">海州区各乡镇街道制定下发《全民科学素...</a></li>
			</ul>
			</div>
		</div>
		<div class="span5">
			<div class="widget round">
			<h3>工作动态<span class="more-only">	<?php echo CHtml::link('更多>>',array('post/category','id'=>34)) ?></span></h3>
				<?php $this->widget('NewsList',array(
					'categoryID'=>'34',
					'length'=>25,
					'lines'=>6,
					'showDate'=>false,
				)); ?>
			</div>
			</div>
		</div>
	</div>
<div class="span3">
	<div class="widget round">
		<h3>通知公告<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>35)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'35',
			'length'=>8,
			'lines'=>6,
			'showDate'=>true,
		)); ?>
	</div>
	<div class="widget round">
		<h3>文献资料<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>89)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'89',
			'length'=>8,
			'lines'=>9,
			'showDate'=>true,
		)); ?>
	</div>
</div>
</div>
<div>
<div class="widget round">
	<div class="flexslider recent-active">
	  <ul class="slides lastslides">
	    <li>
	      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/r01.jpg" />
	    </li>
	    <li>
	      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/r02.jpg" />
	    </li>
	    <li>
	      <img src="<?php echo Yii::app()->baseUrl ?>/flash_image/r03.jpg" />
	    </li>
	  </ul>
	</div>
</div>
</div>
<div class="row">
<div class="span12">
	<div class="widget round document content-list">
		<h3>重要文件<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>40)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'40',
			'length'=>50,
			'lines'=>12,
			'showDate'=>true,
		)); ?>
	</div>
</div>