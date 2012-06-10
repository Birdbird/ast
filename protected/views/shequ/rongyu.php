<div class="span3">
	<div class="widget round">
		<h3>媒体报道<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>96)) ?></span></h3>
		<?php $this->widget('NewsList',array('categoryID'=>96,'lines'=>5,'length'=>14)) ?>
	</div>
	<div class="widget round">
		<h3>新闻发布<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>97)) ?></span></h3>
		<?php $this->widget('NewsList',array('categoryID'=>97,'lines'=>5,'length'=>14)) ?>
	</div>
	<div class="widget round news-list">
		<h3>热点专题<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>98)) ?></span></h3>
		<ul>
			<li class="first"><img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $hotrnews->thumbnail ?>" alt="image" class="hotnews"/>
				<div class="hot-title"><h4><?php echo CHtml::link(mb_substr($hotrnews->title,0,9), array('post/view','id'=>$hotrnews->id),array('title'=>$hotrnews->title)) ?></h4>
				<?php echo mb_substr(strip_tags($hotrnews->content), 0,10) ?></div></li>
			<?php $this->widget('NewsList',array('categoryID'=>98,'lines'=>2,'length'=>14)) ?>
		</ul>
	</div>
	</div>
	<div class="span5">
	<div class="widget round">
		<h4>人物奖<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>102)) ?></span></h4>
		<?php $this->widget('NewsList',array('categoryID'=>102,'lines'=>5,'length'=>23)) ?>
		<h4>项目奖<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>103)) ?></span></h4>
		<?php $this->widget('NewsList',array('categoryID'=>103,'lines'=>5,'length'=>23)) ?>
		<h4>国家奖励推荐<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>104)) ?></span></h4>
		<?php $this->widget('NewsList',array('categoryID'=>104,'lines'=>5,'length'=>23)) ?>
		<h4>其他<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>105)) ?></span></h4>
		<?php $this->widget('NewsList',array('categoryID'=>105,'lines'=>5,'length'=>23)) ?>
	</div>
	</div>
	<div class="span4">
	<div class="widget round news-list">
		<h3>要闻<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>99)) ?></span></h3>
		<ul>
			<li class="first"><img src="<?php echo Yii::app()->baseUrl ?>/upload/thumbnail/<?php echo $importentrnews->thumbnail ?>" alt="image" class="important-news"/>
				<div class="important-title"><h4><?php echo CHtml::link(mb_substr($importentrnews->title,0,12), array('post/view','id'=>$importentrnews->id),array('title'=>$importentrnews->title))  ?></h4>
					<?php echo mb_substr(strip_tags($importentrnews->content), 0,20) ?></div></li>
			<?php $this->widget('NewsList',array('categoryID'=>99,'lines'=>4,'length'=>13)) ?>
		</ul>
	</div>
	<div class="widget round">
		<h3>工作动态<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>100)) ?></span></h3>
		<?php $this->widget('NewsList',array('categoryID'=>100,'lines'=>5,'length'=>13)) ?>
	</div>
	<div class="widget round">
		<h3>基层建设<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>101)) ?></span></h3>
		<?php $this->widget('NewsList',array('categoryID'=>101,'lines'=>5,'length'=>13)) ?>
	</div>
</div>