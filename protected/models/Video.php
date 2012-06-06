<?php

class Video extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'video';
	}
	
	public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'updateAttribute'=>null,
			)
		);
	}
	
	public function rules()
	{
		return array(
			array('title, file', 'required'),
			array('description,thumbnail','safe'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => '标题',
			'description' => '描述',
			'create_time' => '创建时间',
			'file' => '文件',
			'thumbnail'=>'缩略图',
		);
	}
	
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}