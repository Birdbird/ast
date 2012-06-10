<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $author_id
 * @property integer $category_id
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Post the static model class
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
		return 'post';
	}
	
	public function init()
	{
		$this->onBeforeSave = array($this,'setAuthor');
	}
	
	public function setAuthor()
	{
		if($this->isNewRecord)
			$this->author_id = Yii::app()->user->getId();
	}
	
	public function getUrl()
	{
		return Yii::app()->createUrl('post/view',array('id'=>$this->id));
	}
	
	public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'setUpdateOnCreate'=>true,
			)
		);
	}
	
	public static function getPostsInCategories($categoryIDs,$rows=10)
	{
		$ids = implode(',',$categoryIDs);
		$posts = Post::model()->findAllBySql('SELECT * FROM  `post` WHERE  `category_id` IN (
			SELECT id FROM category WHERE category.root in ('.$ids.')) order by id desc limit :rows',array(':rows'=>$rows));
		return $posts;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content,category_id', 'required'),
			array('create_time, update_time, author_id, category_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>128),
			array('content','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			array('hot,top,thumbnail','safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, content, create_time, update_time, author_id, category_id ,author', 'safe', 'on'=>'search'),
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
			'author' => array(self::BELONGS_TO, 'User', 'author_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'attaches'=>array(self::HAS_MANY,'PostAttach','post_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => '标题',
			'content' => '内容',
			'create_time' => '创建时间',
			'update_time' => '更新时间',
			'author_id' => '作者',
			'category_id' => '分类',
			'thumbnail'=>'缩略图',
			'hot'=>'热门文章',
			'top'=>'精品推荐',
			'author'=>'作者',
		);
	}
	
	protected $_nextPost;
	public function getNextPost()
	{
		if(!$this->_nextPost){
			$this->_nextPost = Post::model()->find(array(
				'condition'=>'id>:id and category_id=:categoryID',
				'params'=>array(':id'=>$this->id,':categoryID'=>$this->category_id),
				'order'=>'id asc',
			));
		}
		return $this->_nextPost;
	}
	
	protected $_prevPost;
	public function getPrevPost()
	{
		if(!$this->_prevPost){
			$this->_prevPost = Post::model()->find(array(
				'condition'=>'id<:id and category_id=:categoryID',
				'params'=>array(':id'=>$this->id,':categoryID'=>$this->category_id),
				'order'=>'id desc',
			));
		}
		return $this->_prevPost;
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('author_id',$this->author_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('author',$this->category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>array('id'=>CSort::SORT_DESC),
			)
		));
	}
}