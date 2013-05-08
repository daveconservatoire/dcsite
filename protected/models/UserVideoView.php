<?php

/**
 * This is the model class for table "UserVideoView".
 *
 * The followings are the available columns in table 'UserVideoView':
 * @property string $id
 * @property string $userId
 * @property string $lessonId
 * @property integer $status
 * @property string $position
 * @property integer $timestamp
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Lesson $lesson
 */
class UserVideoView extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserVideoView the static model class
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
		return 'UserVideoView';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, lessonId, status, timestamp', 'required'),
			array('status, timestamp', 'numerical', 'integerOnly'=>true),
			array('userId, lessonId', 'length', 'max'=>10),
			array('position', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, lessonId, status, position, timestamp', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'userId'),
			'lesson' => array(self::BELONGS_TO, 'Lesson', 'lessonId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userId' => 'User',
			'lessonId' => 'Lesson',
			'status' => 'Status',
			'position' => 'Position',
			'timestamp' => 'Timestamp',
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
		$criteria->compare('userId',$this->userId,true);
		$criteria->compare('lessonId',$this->lessonId,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('timestamp',$this->timestamp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}