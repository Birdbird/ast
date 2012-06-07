<?php
class SiteMenu {
	const Index = 0;
	const Huinong = 1;
	const Suzhi = 2;
	const Haizhi = 3;
	
	public static $items = array(
		//首页
		array(
			array('label'=>'首页', 'url'=>array('/page/index')),
			array('label'=>'走进科协', 'url'=>array('/page/about')),
			array('label'=>'政策法规', 'url'=>array('/post/category','id'=>11)),
			array('label'=>'工作动态', 'url'=>array('/post/category','id'=>7)),
			array('label'=>'学会之窗', 'url'=>array('/xuehui/index'),'items'=>array(
				array('label'=>'学会动态', 'url'=>array('/xuehui/index')),
				array('label'=>'学会介绍', 'url'=>array('/xuehui/index')),
			)),
			array('label'=>'科普之窗', 'url'=>'','items'=>array(
				array('label'=>'科普惠农', 'url'=>array('/huinong/index')),
				array('label'=>'社区科普益民', 'url'=>array('/huinong/index')),
			)),
			array('label'=>'全民科学素质行动', 'url'=>array('/suzhi/index'),'items'=>array(
				array('label'=>'工作动态', 'url'=>array('/page/news')),
				array('label'=>'重要文件', 'url'=>array('/page/news')),
				array('label'=>'文献资料', 'url'=>array('/page/news')),
				array('label'=>'联系我们', 'url'=>array('/page/news')),
			)),
			array('label'=>'科技者工作者之家', 'url'=>array('/page/index')),
			array('label'=>'海智计划', 'url'=>array('/haizhi/index'),'items'=>array(
				array('label'=>'海智新闻', 'url'=>array('/post/category','id'=>44)),
				array('label'=>'海智简介', 'url'=>array('/post/view','id'=>27)),
				array('label'=>'海智简讯', 'url'=>array('/post/category','id'=>46)),
				array('label'=>'筑巢引凤', 'url'=>array('/post/category','id'=>47)),
				array('label'=>'金凤寻巢', 'url'=>array('/post/category','id'=>48)),
				array('label'=>'联系我们', 'url'=>array('#')),
			)),
			array('label'=>'数字科技馆', 'url'=>array('/page/kejiguan'),'items'=>array(
				array('label'=>'科普图吧', 'url'=>array('/page/images')),
				array('label'=>'科普游戏', 'url'=>array('/page/game')),
				array('label'=>'科普视频', 'url'=>array('/page/video')),
				array('label'=>'最新公告', 'url'=>array('/page/news')),
			)),
			array('label'=>'身边科学', 'url'=>array('/page/shenbian'),'items'=>array(
				array('label'=>'健康养生', 'url'=>array('/page/news')),
				array('label'=>'电器知识', 'url'=>array('/page/news')),
				array('label'=>'节能环保', 'url'=>array('/page/news')),
			)),
			array('label'=>'下载中心', 'url'=>array('/page/download')),
		),
		//科普惠农
		array(
			array('label'=>'首页', 'url'=>array('/huinong/index')),
			array('label'=>'最新动态', 'url'=>array('/page/news')),
			array('label'=>'通知通告', 'url'=>array('/page/news')),
			array('label'=>'荣誉之窗', 'url'=>array('/huinong/rongyu')),
			array('label'=>'内容简介', 'url'=>array('/page/news')),
			array('label'=>'下载中心', 'url'=>array('/page/download')),
			array('label'=>'联系我们', 'url'=>array('/page/article')),
		),
		//全民素质
		array(
			array('label'=>'首页', 'url'=>array('/suzhi/index')),
			array('label'=>'热点新闻', 'url'=>array('/page/news')),
			array('label'=>'工作动态', 'url'=>array('/page/news')),
			array('label'=>'重要文件', 'url'=>array('/page/news')),
			array('label'=>'文献资料', 'url'=>array('/page/news')),
			array('label'=>'联系我们', 'url'=>array('/page/article')),
		),
		//海智计划
		array(
			array('label'=>'首页', 'url'=>array('/haizhi/index')),
			array('label'=>'海智新闻', 'url'=>array('/post/category','id'=>44)),
			array('label'=>'海智简介', 'url'=>array('/post/view','id'=>27)),
			array('label'=>'海智简讯', 'url'=>array('/post/category','id'=>46)),
			array('label'=>'筑巢引凤', 'url'=>array('/post/category','id'=>47)),
			array('label'=>'金凤寻巢', 'url'=>array('/post/category','id'=>48)),
			array('label'=>'联系我们', 'url'=>array('#')),
		),
	);
	
	public static function getItems($i)
	{
		return self::$items[$i];
	}
}