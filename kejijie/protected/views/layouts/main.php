<!DOCTYPE HTML>
<html lang="zh-CN" class="ua-linux ua-webkit">
<head>
<meta charset="UTF-8">
<meta content="" name="">
<title>中国•海门 第一届科技节</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/css/index.css">
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie6.css" />
<![endif]-->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"> </script> 
<script type="text/javascript" language="javascript" src="<?php echo Yii::app()->baseUrl ?>/js/jquery.carouFredSel-5.6.1.js"></script>
<script type="text/javascript" language="javascript">
$(function(){
	$('#scoll').carouFredSel({scroll:{'pauseOnHover': true,items:1},items:1,direction:"up"});
});
</script>
</head>
<body>
	<div id="wrap">
	  <div id="left">
	  	<div class="title">
	  		<div class="title-name"></div>
	  		<div class="date">2012年 6月15-20日</div>
	  	</div>
			<div class="menu">
			<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
			array('label'=>'首页', 'url'=>array('/site/index')),
			//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
			array('label'=>'科技节介绍', 'url'=>array('/site/about')),
			array('label'=>'活动报告', 'url'=>array('/post/category','id'=>2)),
			// array('label'=>'科技征文', 'url'=>array('/post/category','id'=>3)),
			array('label'=>'企业需求', 'url'=>array('/projectPost/category')),
			array('label'=>'项目成果', 'url'=>array('/post/category','id'=>5)),
			array('label'=>'企业风采', 'url'=>array('/site/comlist')),
			array('label'=>'专家教授海门行', 'url'=>array('/site/professor')),
			array('label'=>'下载专区', 'url'=>array('/post/category','id'=>8)),
			array('label'=>'在线视频', 'url'=>array('/site/video')),
			),
			)); ?>
  		</div>
	  </div>
	  <div id="right">
	  	<div class="top widget">
				<?php
				$this->widget('SlideShow',array(
					'slideID'=>1,
					'id'=>'slideshow_top',
					'config'=>array('pauseTime'=>'5000','effect'=>'random')
					// 'htmlOptions'=>array('class'=>'theme-default'),
				));
				?>
	  	</div>
	  	<div class="active-news widget">
	  		<div class="kactive-news">
	  			<p>科技节动态</p>
	  		</div>
	  		<div class="news-scoll" id="scoll">
	  			<?php $this->widget('Scroller') ?>
	  		</div>
	  	</div>
	  	<div class="content">
	  	<?php echo $content; ?>
	  </div>
	  </div>
	  <div id="footer">
	  	<!-- Copyright &copy; -->中国•海门 第一届科技节<br/>
	  </div>
    </div>
</body>
</html>