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
</div>
<div class="span9">
	<div class="widget round content-list">
		<ul>
			<?php foreach ($news as $newsItem): ?>
			<li>
				<?php echo CHtml::link($newsItem->title,array('post/view','id'=>$newsItem->id)) ?>
				<span class="news-time"><?php echo date('Y-m-d',$newsItem->create_time)?></span>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>