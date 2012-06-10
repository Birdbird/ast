<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $id
 * @property string $name
 * @property integer $sort_id
 * @property string $description
 * @property string $links
 * @property string $thumbnail
 */
class Company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Company the static model class
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
		return 'company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, sort_id, description', 'required'),
			array('links, thumbnail','safe'),
			array('sort_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('links, thumbnail', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, sort_id, description, links, thumbnail', 'safe', 'on'=>'search'),
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
			'sort' => array(self::BELONGS_TO,'Sort','sort_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(        
			'id' => '序号',
			'name' => '公司名称',
			'sort_id' => '所属分类',
			'description' => '描述',
			'links' => '公司链接',
			'thumbnail' => '公司图片',
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
		$criteria->compare('sort_id',$this->sort_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('links',$this->links,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}