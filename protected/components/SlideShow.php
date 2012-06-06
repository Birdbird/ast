<?php
Yii::import('ext.nivoslider.ENivoSlider');

class SlideShow extends ENivoSlider
{
	public $slideID;
	
	public function init()
	{
		$slide = Slide::model()->findByPk($this->slideID);
		foreach ($slide->images as $image) {
			$i = array('src'=>Yii::app()->baseUrl.'/upload/slide/'.$image->image,'caption'=>$image->title);
			if($image->url) $i['url']=$image->url;
			$this->images[]=$i;
		}
		//if($slide) $this->images = $slide->images;
		$defaultConfig = array(
			'directionNav'=>false,
			'controlNav'=>false,
			'pauseOnHover'=>false,
			'pauseTime'=>3000,
			'effect'=>'fade',
		);
		$this->config = array_merge($defaultConfig,$this->config);
		parent::init();
	}
	
}