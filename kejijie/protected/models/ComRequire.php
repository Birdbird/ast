<?php

/**
 * This is the model class for table "com_require".
 *
 * The followings are the available columns in table 'com_require':
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $charge
 * @property string $charge_tel
 * @property string $contact
 * @property string $contact_tel
 * @property string $email
 * @property string $zip_code
 * @property string $require
 * @property string $content
 * @property string $tec_require
 * @property string $forecast
 * @property string $com_intro
 * @property string $amount
 */
class ComRequire extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ComRequire the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'com_require';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, require, content, com_intro', 'required'),
			array('forecast,tec_require','safe'),
			array('name, charge, charge_tel, contact, contact_tel', 'length', 'max'=>20),
			array('address, require', 'length', 'max'=>128),
			array('email, amount', 'length', 'max'=>50),
			array('zip_code', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, address, charge, charge_tel, contact, contact_tel, email, zip_code, require, content, tec_require, forecast, com_intro, amount', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	protected $_nextPost;
	public function getNextPost()
	{
		if(!$this->_nextPost){
			$this->_nextPost = ComRequire::model()->find(array(
				'condition'=>'id>:id',
				'params'=>array(':id'=>$this->id),
				'order'=>'id asc',
			));
		}
		return $this->_nextPost;
	}
	
	protected $_prevPost;
	public function getPrevPost()
	{
		if(!$this->_prevPost){
			$this->_prevPost = ComRequire::model()->find(array(
				'condition'=>'id<:id',
				'params'=>array(':id'=>$this->id),
				'order'=>'id desc',
			));
		}
		return $this->_prevPost;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '序号',
			'name' => '单位名称',
			'address' => '单位地址',
			'charge' => '单位负责人',
			'charge_tel' => '单位负责人电话',
			'contact' => '联 系 人',
			'contact_tel' => '联系人电话',
			'email' => 'E_mail',
			'zip_code' => '邮政编码',
			'require' => '难题（项目需求）名称',
			'content' => '内容说明（300字内）',
			'tec_require' => '主要技术,参数要求',
			'forecast' => '前景预测',
			'com_intro' => '企业简述（注明企业现有厂房、设备、产品等）',
			'amount' => '拟投资金',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('charge',$this->charge,true);
		$criteria->compare('charge_tel',$this->charge_tel,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('contact_tel',$this->contact_tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('require',$this->require,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('tec_require',$this->tec_require,true);
		$criteria->compare('forecast',$this->forecast,true);
		$criteria->compare('com_intro',$this->com_intro,true);
		$criteria->compare('amount',$this->amount,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}