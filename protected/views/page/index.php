<div class="span4">
	<div class="theme-default">
	<?php
	$this->widget('SlideShow',array(
		'slideID'=>1,
		'id'=>'slideshow1',
		// 'htmlOptions'=>array('class'=>'theme-default'),
	));
	?>
	</div>
</div>
<div class="span4">
	<div class="widget widget-notice">
		<h3>要闻快递<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>90)) ?></span></h3>
			<?php $this->widget('NewsList',array('categoryID'=>90,'lines'=>9,'length'=>18)) ?>
	</div>
</div>
<div class="span4">
	<div class="widget widget-notice">
		<h3>最新公告<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>91)) ?></span></h3>
		<?php $this->widget('NewsList',array('categoryID'=>91,'lines'=>14,'length'=>18)) ?>
	</div>
</div>
</div>
<div class="round scoll-text">
	<ul> 
		<?php foreach ($scrolltexts as $scrolltext): ?>
			<li><?php echo $scrolltext->text ?></li>
		<?php endforeach ?>
	</ul> 
</div>
<div>
<a href="<?php echo $this->createUrl('suzhi/index') ?>"><img src="<?php echo Yii::app()->baseUrl ?>/image/suzhi.png" alt="news title" class="little-titles"/></a>
<a href="http://www.js5461.org/"><img src="<?php echo Yii::app()->baseUrl ?>/image/qkj.png" alt="news title" class="little-titles"/></a>
<a href="<?php echo $this->createUrl('page/video') ?>"><img src="<?php echo Yii::app()->baseUrl ?>/image/spzx.png" alt="news title" class="little-titles"/></a>
<a href="<?php echo $this->createUrl('huinong/index') ?>"><img src="<?php echo Yii::app()->baseUrl ?>/image/kphn.png" alt="news title" class="little-titles"/></a>
<a href="<?php echo $this->createUrl('shequ/index') ?>"><img src="<?php echo Yii::app()->baseUrl ?>/image/kpym.png" alt="news title" class="little-titles"/></a>
<a href="<?php echo $this->createUrl('page/gongzuozhe') ?>"><img src="<?php echo Yii::app()->baseUrl ?>/image/kjgz.png" alt="news title" class="little-titles"/></a>
<a href="<?php echo $this->createUrl('haizhi/index') ?>"><img src="<?php echo Yii::app()->baseUrl ?>/image/hzjh.png" alt="news title" class="little-titles"/></a>
<a href="<?php echo $this->createUrl('post/category',array('id'=>11)) ?>"><img src="<?php echo Yii::app()->baseUrl ?>/image/kpfg.png" alt="news title" class="little-titles"/></a>		
</div>

<div class="row">
<div class="span8">
  <div class="widget widget-theme widget2">
		<h3>学会动态<span class="more-only"><a href="<?php echo $this->createUrl('xuehui/index') ?>">更多>></a></span></h3>
		<div class="span4 one-pic">
				<?php
				$this->widget('SlideShow',array(
					'slideID'=>6,
					'id'=>'slideshow2',
					// 'htmlOptions'=>array('class'=>'theme-default'),
				));
				?>
		</div>
		<div class="span4 widget-content">
    		<?php $this->widget('XuehuiList',array('lines'=>9,'length'=>20)) ?>
		</div>
	</div>
  <div class="widget widget-theme widget2">
		<h3>科普之窗</h3>
		<div class="span4 one-pic">
			<?php
			$this->widget('SlideShow',array(
				'slideID'=>7,
				'id'=>'slideshow3',
				// 'htmlOptions'=>array('class'=>'theme-default'),
			));
			?>
		</div>
		<div class="span4 widget-content">
    	<?php $this->widget('IndexList',array('categoryIDs'=>array(65,66),'lines'=>9,'length'=>20)) ?>
		</div>
	</div>
</div>
<div class="span4">
	<div class="widget widget-side" id="widget1">
		<h3>身边科学<span class="more-only"><a href="<?php echo $this->createUrl('page/shenbian') ?>">更多>></a></span></h3>
		<div class="right-list">
			<ul>
				<?php foreach ($slidernews as $slidernew): ?>
					<li class="clearfix"><img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $slidernew->thumbnail ?>" alt="图片"/>
					<div class="pic-detatil">
						<h3><?php echo CHtml::link(mb_substr($slidernew->title,0,9), array('post/view','id'=>$slidernew->id),array('title'=>$slidernew->title)) ?></h3>
						<p><?php echo mb_substr(strip_tags($slidernew->content),0,33) ?></p>
					</div>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="span6">
	<div class="widget-theme widget widget2 one-pic">
		<h3>海智计划<span class="more-only"><a href="<?php echo $this->createUrl('haizhi/index') ?>">更多>></a></span></h3>
		<div class="span2">
			<ul class="images">
				<?php foreach ($haizhinews as $haizhinew): ?>
					<li><a href="<?php echo $this->createUrl('page/view',array('id'=>$haizhinew->id)) ?>">
						<img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $haizhinew->thumbnail ?>"></a>
						<cite><?php echo CHtml::link(mb_substr($haizhinew->title,0,8), array('post/view','id'=>$haizhinew->id),array('title'=>$haizhinew->title)) ?></cite>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
		<div class="span4 widget3 ">
			<?php $this->widget('IndexList',array('categoryIDs'=>array(43),'lines'=>9,'length'=>20)) ?>
		</div>
	</div>
</div>
<div class="span6">
	<div class="widget widget-theme widget2">
		<h3>数字科技馆<span class="more-only"><a href="<?php echo $this->createUrl('page/kejiguan') ?>">更多>></a></span></h3>
		<div class="pic-row">
			<div class="slide-title"><p>科普视频</p></div>
			<div class="science-pics">
				<ul class="images-more">
					<?php foreach ($videos as $videoitem): ?>
						<li><a href="<?php echo $this->createUrl('page/video') ?>">
							<img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $videoitem->thumbnail ?>"></a></li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
		<div class="pic-row">
			<div class="slide-title"><p>科普小游戏</p></div>
			<div class="science-pics">
				<ul class="images-more">
					<?php foreach ($games as $game): ?>
						<li><a href="<?php echo $this->createUrl('page/game') ?>">
							<img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $game->thumbnail ?>">
						</a></li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
	</div>
</div>