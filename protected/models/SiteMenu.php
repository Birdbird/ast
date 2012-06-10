<?php
class SiteMenu {
	const Index = 0;
	const Huinong = 1;
	const Suzhi = 2;
	const Haizhi = 3;
	const Yimin = 4;
	
	public static $categories =array(
		'65'=>SiteMenu::Huinong,
		'66'=>SiteMenu::Yimin,
		'31'=>SiteMenu::Suzhi,
		'43'=>SiteMenu::Haizhi,
	);
	
	public static $breadcrumbs =array(
		'11'=>array('政策法规'),
		'7'=>array('工作动态'),
		'65'=>array('科普惠农'=>array('huinong/index')),
		'66'=>array('社区科普益民'=>array('shequ/index')),
		'31'=>array('全民科学素质行动'=>array('suzhi/index')),
		'43'=>array('海智计划'=>array('haizhi/index')),
	);
	
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
				array('label'=>'社区科普益民', 'url'=>array('/shequ/index')),
			)),
			array('label'=>'全民科学素质行动', 'url'=>array('/suzhi/index'),'items'=>array(
				array('label'=>'工作动态', 'url'=>array('/post/category','id'=>34)),
				array('label'=>'重要文件', 'url'=>array('/post/category','id'=>40)),
				array('label'=>'文献资料', 'url'=>array('/post/category','id'=>89)),
				array('label'=>'联系我们', 'url'=>array('/post/view','id'=>224)),
			)),
			array('label'=>'科技者工作者之家', 'url'=>array('/page/gongzuozhe')),
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
				array('label'=>'精品推荐', 'url'=>array('/post/category','id'=>59)),
			)),
			array('label'=>'身边科学', 'url'=>array('/page/shenbian'),'items'=>array(
				array('label'=>'健康养生', 'url'=>array('/post/category','id'=>58)),
				array('label'=>'电器知识', 'url'=>array('/post/category','id'=>60)),
				array('label'=>'节能环保', 'url'=>array('/post/category','id'=>61)),
			)),
			array('label'=>'下载中心', 'url'=>array('/page/download')),
		),
		//科普惠农
		array(
			array('label'=>'科普惠农', 'url'=>array('/huinong/index')),
			array('label'=>'通知通告', 'url'=>array('/post/category','id'=>16)),
			array('label'=>'荣誉之窗', 'url'=>array('/huinong/rongyu')),
			array('label'=>'内容简介', 'url'=>array('/post/view','id'=>79)),
			array('label'=>'下载中心', 'url'=>array('/post/category','id'=>19)),
			array('label'=>'联系我们', 'url'=>array('/post/view','id'=>224)),
		),
		//全民素质
		array(
			array('label'=>'全民科学素质行动', 'url'=>array('/suzhi/index')),
			array('label'=>'热点新闻', 'url'=>array('/post/category','id'=>32)),
			array('label'=>'工作动态', 'url'=>array('/post/category','id'=>34)),
			array('label'=>'重要文件', 'url'=>array('/post/category','id'=>40)),
			array('label'=>'文献资料', 'url'=>array('/post/category','id'=>89)),
			array('label'=>'联系我们', 'url'=>array('/post/view','id'=>224)),
		),
		//海智计划
		array(
			array('label'=>'海智计划', 'url'=>array('/haizhi/index')),
			array('label'=>'海智新闻', 'url'=>array('/post/category','id'=>44)),
			array('label'=>'海智简介', 'url'=>array('/post/view','id'=>27)),
			array('label'=>'海智简讯', 'url'=>array('/post/category','id'=>46)),
			array('label'=>'筑巢引凤', 'url'=>array('/post/category','id'=>47)),
			array('label'=>'金凤寻巢', 'url'=>array('/post/category','id'=>48)),
			array('label'=>'联系我们', 'url'=>array('/post/view','id'=>224)),
		),
		//社区科普
		array(
			array('label'=>'社区科普益民', 'url'=>array('/shequ/index')),
			array('label'=>'通知通告', 'url'=>array('/post/category','id'=>68)),
			array('label'=>'荣誉之窗', 'url'=>array('/shequ/rongyu')),
			array('label'=>'内容简介', 'url'=>array('/post/view','id'=>79)),
			array('label'=>'下载中心', 'url'=>array('/post/category','id'=>77)),
			array('label'=>'联系我们', 'url'=>array('/post/view','id'=>224)),
		),
	);
	
	public static function getItems($i)
	{
		return self::$items[$i];
	}
}