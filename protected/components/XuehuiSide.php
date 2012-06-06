<?php
class XuehuiSide extends CWidget
{
	public $xuehuis;
	public function init()
	{
		$this->xuehuis = Xuehui::model()->findAll();
	}

	public function run()
	{
		echo '<a href="'.Yii::app()->createUrl('xuehui/index').'"><h3>学会动态</h3></a>';
		echo '<h3>学会介绍</h3>';
		echo '<ul>';
		foreach ($this->xuehuis as $xuehui) {
			echo '<li>'.CHtml::link($xuehui->name,array('xuehui/intro','id'=>$xuehui->id)).'</li>';
		}
		echo '</ul>';
	}
}