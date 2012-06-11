<?php

class ScrollText extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'scrolltext';
	}
	
	public function rules()
	{
		return array(
			array('text', 'required'),
			array('url','safe'),
			array('text', 'length', 'max'=>64),
			array('url', 'length', 'max'=>128),
			array('id, text,url', 'safe', 'on'=>'search'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'text' => '内容',
			'url' => '链接',
		);
	}
	
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('text',$this->text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}