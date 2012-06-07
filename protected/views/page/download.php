<div class="span3">
	<div class="widget round">
		<?php $this->widget('HotList') ?>
	</div>
</div>
<div class="span9">
<div class="widget round">
	<div class="news-list content-list">
		<h3>科普惠农文件<span class="more-only"><a href="<?php echo $this->createUrl('page/category',array('id'=>19)) ?>">更多>></a></span></h3>
		<?php $this->widget('IndexList',array('categoryIDs'=>array(19),'lines'=>6,'length'=>40)) ?>
	</div>
	</div>
	<div class="widget round">	
	<div class="news-list content-list">
		<h3>社区科普益民文件<span class="more-only"><a href="<?php echo $this->createUrl('page/category',array('id'=>77)) ?>">更多>></a></span></h3>
		<?php $this->widget('IndexList',array('categoryIDs'=>array(77),'lines'=>6,'length'=>40)) ?>
	</div>
	</div>
<div class="widget round">
	<div class="news-list content-list">
		<h3>其他文件<span class="more-only"><a href="<?php echo $this->createUrl('page/category',array('id'=>63)) ?>">更多>></a></span></h3>
		<?php $this->widget('IndexList',array('categoryIDs'=>array(63),'lines'=>6,'length'=>40)) ?>
	</div>
	</div>
</div>