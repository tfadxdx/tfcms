<?php

/**
 * This is the model class for table "{{taxonomy}}".
 *
 * The followings are the available columns in table '{{taxonomy}}':
 * @property string $id
 * @property string $name
 * @property string $slug
 * @property string $taxonomy
 * @property string $description
 * @property string $parent
 * @property string $count
 * @property integer $status
 * @property integer $createtime
 * @property integer $updatetime
 */
class Taxonomy extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Taxonomy the static model class
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
		return '{{taxonomy}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, slug, description, createtime, updatetime', 'required'),
			array('status, createtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('name, slug', 'length', 'max'=>200),
			array('taxonomy', 'length', 'max'=>32),
			array('parent, count', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, slug, taxonomy, description, parent, count, status, createtime, updatetime', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'slug' => 'Slug',
			'taxonomy' => 'Taxonomy',
			'description' => 'Description',
			'parent' => 'Parent',
			'count' => 'Count',
			'status' => 'Status',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('taxonomy',$this->taxonomy,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('parent',$this->parent,true);
		$criteria->compare('count',$this->count,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('updatetime',$this->updatetime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        /**
         * @return scopes methods
         */
        public function scopes()
        {
            return array(
                'published'=>array(
                    'condition'=>'status=1',
                ),
                'recently'=>array(
                    'order'=>'createtime DESC',
                    'limit'=>5,
                ),
                'desc'=>array(
                    'order'=>'createtime DESC',
                ),
            );
        }
}