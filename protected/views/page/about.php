<div class="span4">
	<div class="accordion">
		<h3>科协党组</h3>
		<p><span>党组书记、主  席:<a href="#">顾建平</a></span>
		<span>党组成员、副主席:<a href="#">姜志斌</a></span>
		<span>党组成员、副主席:<a href="#">沈  飚</a></span>
		
		<h3>组织机构</h3>
		<p>
			<span>主 席：<a href="#">顾建平</a></span>
			<span>副主席：<a href="#">沈  飚</a><a href="#">姜志斌</a>      
			<span class="organization"><a href="<?php echo $this->createUrl('about',array('id'=>5))?>">常委会委员</a></span><span  class="organization"><a href="<?php echo $this->createUrl('about',array('id'=>4))?>">全委会委员</a></span>
			<span  class="organization"><a href="<?php echo $this->createUrl('about',array('id'=>1))?>">办公室</a></span><span  class="organization"><a href="<?php echo $this->createUrl('about',array('id'=>2))?>">普及部</a></span>
			<span  class="organization"><a href="<?php echo $this->createUrl('about',array('id'=>3))?>">学会部</a></span>
		</p>
		<h3>历届主席</h3>                
		<p class="zhuxi">
			<span><a href="#">秦素萍</a><a href="#">张  康</a><a href="#">朱玉兰</a><a href="#">王高顺</a>
			<a href="#">陈治环</a><a href="#">仇洪泽</a><a href="#">高  静</a><a href="#">曹思平</a>
			<a href="#">顾建平</a></span>
		</p>
	</div>
</div>
<div class="span8">
	<div class="widget round text-description">
		<h2 class="round"><?php echo $content->name ?></h2>
		<p><?php echo nl2br($content->intro) ?></p>
	</div>
</div>