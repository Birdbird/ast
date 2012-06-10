<?php
class AlbumImage extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'album_image';
	}

	public function rules()
	{
		return array(
			array('image', 'required'),
			array('description','safe'),
		);
	}

	public function relations()
	{
		return array(
			'album'=>array(self::BELONGS_TO,'Album','album_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'image'=>'图片',
			'description'=>'描述',
		);
	}
}
?>