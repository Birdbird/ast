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
			<li><img src="image/t01.jpg" alt="image" class="pictures"/><div class="content"><h4><a href="*">生活小常识</a></h4><p>日前，一份关于健康年龄指数的调研报告称，中国人的“健康赤字”为8.2岁...</p></div></li>
			<li><img src="image/t02.jpg" alt="image" class="pictures"/><div class="content"><h4><a href="*">水果的妙用</a></h4><p>日前，一份关于健康年龄指数的调研报告称，中国人的“健康赤字”为8.2岁...</p></div></li>
			<li><img src="image/t03.jpg" alt="image" class="pictures"/><div class="content"><h4><a href="*">维生素的最佳摄入</a></h4><p>日前，一份关于健康年龄指数的调研报告称，中国人的“健康赤字”为8.2岁...</p></div></li>
			<li><img src="image/t04.jpg" alt="image" class="pictures"/><div class="content"><h4><a href="*">情绪影响身体的健康</a></h4><p>日前，一份关于健康年龄指数的调研报告称，中国人的“健康赤字”为8.2岁...</p></div></li>
			<li><img src="image/t05.jpg" alt="image" class="pictures"/><div class="content"><h4><a href="*">膳食平衡搭配</a></h4><p>日前，一份关于健康年龄指数的调研报告称，中国人的“健康赤字”为8.2岁...</p></div></li>
		</ul>
	</div>
</div>