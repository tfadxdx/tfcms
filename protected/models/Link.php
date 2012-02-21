<?php

/**
 * This is the model class for table "{{link}}".
 *
 * The followings are the available columns in table '{{link}}':
 * @property string $id
 * @property string $url
 * @property string $name
 * @property string $target
 * @property string $description
 * @property string $visible
 * @property integer $rating
 * @property integer $createtime
 * @property integer $updatetime
 */
class Link extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Link the static model class
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
		return '{{link}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('createtime, updatetime', 'required'),
			array('rating, createtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('url, name, description', 'length', 'max'=>255),
			array('target', 'length', 'max'=>25),
			array('visible', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, url, name, target, description, visible, rating, createtime, updatetime', 'safe', 'on'=>'search'),
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

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'url' => 'Url',
			'name' => 'Name',
			'target' => 'Target',
			'description' => 'Description',
			'visible' => 'Visible',
			'rating' => 'Rating',
			'createtime' => 'Createtime',
			'updatetime' => 'Updatetime',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('target',$this->target,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('visible',$this->visible,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('updatetime',$this->updatetime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}