<?php
class IndexList extends NewsList {
	public $categoryIDs;
	
	public function init()
	{
		$this->news = Post::getPostsInCategories($this->categoryIDs,$this->lines);
	}
}