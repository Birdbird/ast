<?php
class Request extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'request';
	}
	
	public function rules()
	{
		return array(
			array('content', 'required'),
			array('nickname','safe'),
			array('content', 'filter','filter'=>'strip_tags'),
			array('content', 'length', 'max'=>600),
		);
	}
	
	public function relations()
	{
		return array(
			'response'=>array(self::HAS_ONE,'Response','request_id','order'=>'response.id DESC'),
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
	
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nickname' => '姓名',
			'content'=>'内容',
		);
	}
	
	public function search()
	{
		$criteria=new CDbCriteria;
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>array('id'=>CSort::SORT_DESC),
			)
		));
	}
}