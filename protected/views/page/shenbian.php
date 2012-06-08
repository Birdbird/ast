<div class="span8">
	<div class="widget round content-list">
		<h3>健康养生<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>58)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'58',
			'length'=>35,
			'lines'=>10,
			'showDate'=>true,
		)); ?>
	</div>
	<div class="widget round content-list">
		<h3>电器知识<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>60)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'60',
			'length'=>35,
			'lines'=>10,
			'showDate'=>true,
		)); ?>
	</div>
	<div class="widget round content-list">
		<h3>节能环保<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>61)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'61',
			'length'=>35,
			'lines'=>10,
			'showDate'=>true,
		)); ?>
	</div>
</div>
<div class="span4">
	<div class="widget round">
		<h3>精品推荐<span class="more-only"><?php echo CHtml::link('更多>>',array('post/category','id'=>59)) ?></span></h3>
		<?php $this->widget('NewsList',array(
			'categoryID'=>'59',
			'length'=>18,
			'lines'=>8,
			'showDate'=>false,
		)); ?>
	</div>
	<div class="widget round pic-list">
		<ul>
			<?php foreach ($slidernews as $slidernew): ?>
				<li><img src="<?php echo Yii::app()->baseUrl.'/upload/thumbnail/'.$slidernew->thumbnail ?>" alt="图片" class="pictures"><div class="content">
					<h4><?php echo CHtml::link(mb_substr($slidernew->title, 0,8), array('post/view','id'=>$slidernew->id),array('title'=>$slidernew->title)) ?></h4>
					<?php echo mb_substr(strip_tags($slidernew->content), 0,32) ?>
				</div></li>
			<?php endforeach ?>
		</ul>
	</div>
</div>