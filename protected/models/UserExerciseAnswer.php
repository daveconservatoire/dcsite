<?php

/**
 * This is the model class for table "UserExerciseAnswer".
 *
 * The followings are the available columns in table 'UserExerciseAnswer':
 * @property integer $id
 * @property string $userId
 * @property string $exerciseId
 * @property integer $complete
 * @property integer $countHints
 * @property integer $timeTaken
 * @property integer $attemptNumber
 * @property string $timestamp
 *
 * The followings are the available model relations:
 * @property User $user
 */
class UserExerciseAnswer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserExerciseAnswer the static model class
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
		return 'UserExerciseAnswer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, exerciseId, complete, countHints', 'required'),
			array('complete, countHints, timeTaken, attemptNumber', 'numerical', 'integerOnly'=>true),
			array('userId, exerciseId', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, exerciseId, complete, countHints, timeTaken, attemptNumber, timestamp', 'safe', 'on'=>'search'),
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
			'exercise' => array(self::BELONGS_TO, 'Lesson', 'exerciseId'),
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
			'exerciseId' => 'Exercise',
			'complete' => 'Complete',
			'countHints' => 'Count Hints',
			'timeTaken' => 'Time Taken',
			'attemptNumber' => 'Attempt Number',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('userId',$this->userId,true);
		$criteria->compare('exerciseId',$this->exerciseId,true);
		$criteria->compare('complete',$this->complete);
		$criteria->compare('countHints',$this->countHints);
		$criteria->compare('timeTaken',$this->timeTaken);
		$criteria->compare('attemptNumber',$this->attemptNumber);
		$criteria->compare('timestamp',$this->timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}