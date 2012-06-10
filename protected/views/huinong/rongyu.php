<div class="span3">
	<div class="widget round">
		<h3>媒体报道<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>20)) ?></span></h3>
		<?php $this->widget('NewsList',array('categoryID'=>20,'lines'=>5,'length'=>14)) ?>
	</div>
	<div class="widget round">
		<h3>新闻发布<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>21)) ?></span></h3>
		<?php $this->widget('NewsList',array('categoryID'=>21,'lines'=>5,'length'=>14)) ?>
	</div>
	<div class="widget round news-list">
		<h3>热点专题<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>22)) ?></span></h3>
		<ul>
			<li class="first"><img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $hotrnews->thumbnail ?>" alt="image" class="hotnews"/>
				<div class="hot-title"><h4><?php echo CHtml::link(mb_substr($hotrnews->title,0,9), array('post/view','id'=>$hotrnews->id),array('title'=>$hotrnews->title)) ?></h4>
				<?php echo mb_substr(strip_tags($hotrnews->content), 0,10) ?></div></li>
			<?php $this->widget('NewsList',array('categoryID'=>22,'lines'=>2,'length'=>14)) ?>
		</ul>
	</div>
	</div>
	<div class="span5">
	<div class="widget round">
		<h4>人物奖<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>27)) ?></span></h4>
		<?php $this->widget('NewsList',array('categoryID'=>27,'lines'=>5,'length'=>23)) ?>
		<h4>项目奖<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>28)) ?></span></h4>
		<?php $this->widget('NewsList',array('categoryID'=>28,'lines'=>5,'length'=>23)) ?>
		<h4>国家奖励推荐<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>29)) ?></span></h4>
		<?php $this->widget('NewsList',array('categoryID'=>29,'lines'=>5,'length'=>23)) ?>
		<h4>其他<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>30)) ?></span></h4>
		<?php $this->widget('NewsList',array('categoryID'=>30,'lines'=>5,'length'=>23)) ?>
	</div>
	</div>
	<div class="span4">
	<div class="widget round news-list">
		<h3>要闻<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>24)) ?></span></h3>
		<ul>
			<li class="first"><img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $importentrnews->thumbnail ?>" alt="image" class="important-news"/>
				<div class="important-title"><h4><?php echo CHtml::link(mb_substr($importentrnews->title,0,12), array('post/view','id'=>$importentrnews->id),array('title'=>$importentrnews->title))  ?></h4>
					<?php echo mb_substr(strip_tags($importentrnews->content), 0,20) ?></div></li>
			<?php $this->widget('NewsList',array('categoryID'=>24,'lines'=>4,'length'=>13)) ?>
		</ul>
	</div>
	<div class="widget round">
		<h3>工作动态<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>25)) ?></span></h3>
		<?php $this->widget('NewsList',array('categoryID'=>25,'lines'=>5,'length'=>13)) ?>
	</div>
	<div class="widget round">
		<h3>基层建设<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>26)) ?></span></h3>
		<?php $this->widget('NewsList',array('categoryID'=>26,'lines'=>5,'length'=>13)) ?>
	</div>
</div>