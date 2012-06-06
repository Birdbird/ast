<?php
class Album extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'album';
	}
	
	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>128),
			array('id, name', 'safe', 'on'=>'search'),
		);
	}
	
	public function relations()
	{
		return array(
			'images'=>array(self::HAS_MANY,'AlbumImage','album_id'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => '名称',
		);
	}
	
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}