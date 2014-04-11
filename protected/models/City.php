<?php

/**
 * This is the model class for table "City".
 *
 * The followings are the available columns in table 'City':
 * @property integer $id
 * @property integer $countryId
 * @property integer $regionId
 * @property string $city
 * @property string $latitude
 * @property string $longitude
 * @property string $timeZone
 * @property integer $dmaId
 * @property string $code
 */
class City extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return City the static model class
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
		return 'City';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, countryId, regionId, dmaId', 'numerical', 'integerOnly'=>true),
			array('city', 'length', 'max'=>30),
			array('latitude', 'length', 'max'=>11),
			array('longitude', 'length', 'max'=>10),
			array('timeZone', 'length', 'max'=>6),
			array('code', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, countryId, regionId, city, latitude, longitude, timeZone, dmaId, code', 'safe', 'on'=>'search'),
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
			'countryId' => 'Country',
			'regionId' => 'Region',
			'city' => 'City',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'timeZone' => 'Time Zone',
			'dmaId' => 'Dma',
			'code' => 'Code',
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
		$criteria->compare('countryId',$this->countryId);
		$criteria->compare('regionId',$this->regionId);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('timeZone',$this->timeZone,true);
		$criteria->compare('dmaId',$this->dmaId);
		$criteria->compare('code',$this->code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}