<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>海门公众与科学网</title>
	<meta name="keywords" content="海门市 科学技术协会 科协 ">
	<meta name="description" content=" ">

	<!--[if lt IE 7]>
			<link rel="stylesheet" type="text/css" href="css/ie6.css" />
		<![endif]-->
	<!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"> </script> -->
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/js/ie6-patch.js"> </script>
	<script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  	$("#main-nav>li").hover(function(){
	  		$(this).find(".sub").show();
	  	},function(){
	  		$(this).find(".sub").hide();
	  	});
	  });
	</script>
</head>
<body>
<div id="header">
	<div class="container">
		<a href="<?php echo Yii::app()->createAbsoluteUrl('/') ?>"><h1>海门公众与科学网</h1></a>
		<!-- <div class="images">
			<img src="<?php echo Yii::app()->baseUrl ?>/image/hb1.jpg"/>
			<img src="<?php echo Yii::app()->baseUrl ?>/image/hb2.jpg"/>
		</div> -->
		<embed width="640" height="278" align="left" type="application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="sameDomain" quality="high" src="<?php echo Yii::app()->baseUrl ?>/image/slide.swf"></embed>
		<!-- <a id="logo" href="<?php echo Yii::app()->createAbsoluteUrl('/') ?>"><span>海门市</span>公众与科学网</a> -->
		<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'main-nav',
			'items'=>SiteMenu::getItems($this->menuID),
			'htmlOptions'=>array('class'=>'nav nav-pills'),
			'submenuHtmlOptions'=>array('class'=>'sub round'),
		)); ?>
	</div>
</div>
<div id="main" class="container">
	<?php if ($this->title): ?>
	<h2><?php echo $this->title ?></h2>
	<?php endif ?>
	<div class="row">
	<div class="span12">
	<?php
	if(count($this->breadcrumbs))
		$this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs));
	?>
	</div>
	<?php echo $content; ?>
	</div>
</div>
<div id="footer">
	<div class="width-container">
		<div class="container">
			<ul class="links">
				<li>
					<h2>友情链接</h2>
					<a href="http://www.cast.org.cn/">中国科学技术协会</a></br>
					<a href="http://www.jskx.org.cn/">江苏省科学技术协会</a></br>
					<a href="http://www.ntkx.com/">南通市科学技术协会</a></br>
				</li>
				<li>
	<h2>Copyright&copy;海门市科学技术协会</h2><p>本网站如有内容牵涉到版权问题,请作者与我们联系!</br>地址:海门市北京中路600号&#12288;邮编:226100</p><p>苏ICP备09032920号&#12288;E-Mail: hmkx113@qq.com </p>
				</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>