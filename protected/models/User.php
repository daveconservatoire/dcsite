<?php

/**
 * This is the model class for table "User".
 *
 * The followings are the available columns in table 'User':
 * @property integer $id
 * @property string $username
 * @property string $name
 * @property string $email
 * @property stringinteger $joinDate
 * @property integer $lastActivity
 * @property integer $points
 * @property string $biog
 * @property integer $cityId
 *
 * The followings are the available model relations:
 * @property UserExerciseAnswer[] $userExerciseAnswers
 * @property UserVideoView[] $userVideoViews
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'User';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, name, email', 'required'),
			array('username, name', 'length', 'max'=>100),
			array('email', 'length', 'max'=>200),
			array('biog', 'length', 'max'=>160),
			array('firstip', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			
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
			'exercisesanswered' => array(self::HAS_MANY, 'UserExerciseAnswer', 'userId'),
			'exercisesmastered' => array(self::HAS_MANY, 'UserExSingleMastery', 'userId'),
			'videosviewed' => array(self::HAS_MANY, 'UserVideoView', 'userId'));
			
		
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'name' => 'Name',
			'email' => 'Email',
			'joinDate' => 'Join Date',
			'biog'=>'<h3>About you</h3>Who are you? What are your musical goals? What instruments do you play? <br />(max. 160 characters)<br /><br />',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	 /*
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('joinDate',$this->joinDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
*/
}
