<?php
class SlideImage extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'slide_image';
	}

	public function rules()
	{
		return array(
			array('image', 'required'),
			array('title,url','safe'),
		);
	}

	public function relations()
	{
		return array(
			'slide'=>array(self::BELONGS_TO,'Slide','slideID'),
		);
	}

	public function attributeLabels()
	{
		return array(
		);
	}
}
?>