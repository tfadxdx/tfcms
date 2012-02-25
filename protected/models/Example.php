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
 * @property string $type
 * @property integer $weight
 * @property integer $status
 * @property integer $parent
 * @property integer $createtime
 * @property integer $updatetime
 */
class Example extends Node
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
         * @return scopes methods
         */
        public function scopes()
        {
            return array(
                'self'=>array(
                    'condition'=>'type="example"',
                ),
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