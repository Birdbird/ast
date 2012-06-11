<?php
class Scroller extends CWidget
{
	public $texts;

	public function init()
	{
		$this->texts = ScrollText::model()->findAll(array('limit'=>7,'order'=>'id desc'));
	}

	public function run()
	{
		foreach ($this->texts as $text) {
			echo '<p>';
			echo CHtml::link($text->text, $text->url);
			echo '</p>';
		}
	}
}
?>