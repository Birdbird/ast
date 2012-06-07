<?php
class Response extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'response';
	}
	
	public function rules()
	{
		return array(
			array('content,request_id', 'required'),
			array('content', 'filter','filter'=>'strip_tags'),
			array('content', 'length', 'max'=>600),
		);
	}
	
	public function relations()
	{
		return array(
			'request'=>array(self::BELONGS_TO,'Request','request_id'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'content'=>'回复',
		);
	}
	
	public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
			'class' => 'zii.behaviors.CTimestampBehavior',
			'updateAttribute'=>null,
			)
		);
	}
}