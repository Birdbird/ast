<div class="top-news widget">
	<div class="fill-width"></div>
	<div class="top-news-content">
		<h3><a href="#">海门首届科技节即将隆重举行</a></h3>
		<p>海门市召开了首届科技节组委会扩 大会议，副市长储明星出席会议，并作了重要讲话。她指出海门首届科技节是实事所需，是实现海门创新发展的重要集会，是全市性的工作，要求各乡镇、园区和相关部门群策群力，全力以赴，把首届科技节办实办好，办出实效。</p>
	</div>
</div>
<div class="videos widget">
	<div class="name">
		<h3>在线视频<span><a href="#">更多>></a></span></h3>
		<ul id="foo0">
			<li><a href="#"><img src="images/v01.jpg"></a><a href="#">2011年科技节机器人比赛</a></li>
			<li><a href="#"><img src="images/v02.jpg"></a><a href="#">科技节舞蹈</a></li>
			<li><a href="#"><img src="images/v03.jpg"></a><a href="#">2011科技节开幕式晚会1</a></li>
			<li><a href="#"><img src="images/v05.jpg"></a><a href="#">2011科技节开幕式晚会2</a></li>
			<li><a href="#"><img src="images/v01.jpg"></a><a href="#">2011年科技节机器人比赛</a></li>
			<li><a href="#"><img src="images/v02.jpg"></a><a href="#">科技节舞蹈</a></li>
			<li><a href="#"><img src="images/v03.jpg"></a><a href="#">2011科技节开幕式晚会1</a></li>
			<li><a href="#"><img src="images/v05.jpg"></a><a href="#">2011科技节开幕式晚会2</a></li>
		</ul>
	</div>
</div>
<div class="news1">
	<div class="name">
		<h3>项目成果<span><?php echo CHtml::link('更多>>',array('post/category','id'=>5)) ?></span></h3>
	</div>	
		<?php $this->widget('NewsList',array(
			'categoryID'=>'5',
			'length'=>18,
			'lines'=>7,
			'showDate'=>false,
		)); ?>
</div>
<div class="news1">
	<div class="name">
		<h3>企业需求<span><?php echo CHtml::link('更多>>',array('projectPost/category')) ?></span></h3>
	</div>
	<ul>
	<?php foreach ($requires as $require): ?>
		<li><?php echo CHtml::link(mb_substr($require->require,0,20), array('projectPost/view','id'=>$require->id),array('title'=>'['.$require->name.']'.$require->require)) ?></li>
	<?php endforeach ?>
	</ul>
</div>
