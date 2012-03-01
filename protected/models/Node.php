<?php

/**
 * This is the model class for table "{{node}}".
 *
 * The followings are the available columns in table '{{node}}':
 * @property integer $id
 * @property string $title
 * @property string $name
 * @property string $description
 * @property string $banner
 * @property string $content
 * @property integer $uid
 * @property integer $tid
 * @property integer $is_top
 * @property string $type
 * @property integer $weight
 * @property integer $status
 * @property integer $parent
 * @property integer $createtime
 * @property integer $updatetime
 */
class Node extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Node the static model class
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
		return '{{node}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, name, content, uid, type, status, createtime, updatetime', 'required'),
			array('uid, tid, is_top, weight, status, parent, createtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('title, name', 'length', 'max'=>255),
			array('banner', 'length', 'max'=>500),
			array('type', 'length', 'max'=>50),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, name, description, banner, content, uid, tid, is_top, type, weight, status, parent, createtime, updatetime', 'safe', 'on'=>'search'),
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
			'title' => Yii::t('cn', 'Title'),
			'name' => Yii::t('cn', 'Name'),
			'description' => Yii::t('cn', 'Description'),
			'banner' => Yii::t('cn', 'Banner'),
			'content' => Yii::t('cn', 'Content'),
			'uid' => Yii::t('cn', 'Uid'),
			'tid' => Yii::t('cn', 'Tid'),
                        'is_top' => Yii::t('cn', 'Is Top'),
			'type' => Yii::t('cn', 'Type'),
			'weight' => Yii::t('cn', 'Weight'),
			'status' => Yii::t('cn', 'Status'),
			'parent' => Yii::t('cn', 'Parent Page'),
			'createtime' => Yii::t('cn', 'Createtime'),
			'updatetime' => Yii::t('cn', 'Updatetime'),
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('banner',$this->banner,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('is_top',$this->is_top);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('status',$this->status);
		$criteria->compare('parent',$this->parent);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('updatetime',$this->updatetime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}