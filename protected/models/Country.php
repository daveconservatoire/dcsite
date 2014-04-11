<?php

/**
 * This is the model class for table "Country".
 *
 * The followings are the available columns in table 'Country':
 * @property integer $CountryId
 * @property string $Country
 * @property string $FIPS104
 * @property string $ISO2
 * @property string $ISO3
 * @property string $ISON
 * @property string $Internet
 * @property string $Capital
 * @property string $MapReference
 * @property string $NationalitySingular
 * @property string $NationalityPlural
 * @property string $Currency
 * @property string $CurrencyCode
 * @property integer $Population
 * @property string $Title
 * @property string $Comment
 */
class Country extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Country the static model class
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
		return 'Country';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CountryId, Population', 'numerical', 'integerOnly'=>true),
			array('Country', 'length', 'max'=>44),
			array('FIPS104, ISO2, Internet', 'length', 'max'=>2),
			array('ISO3, ISON, CurrencyCode', 'length', 'max'=>3),
			array('Capital', 'length', 'max'=>17),
			array('MapReference', 'length', 'max'=>49),
			array('NationalitySingular', 'length', 'max'=>26),
			array('NationalityPlural', 'length', 'max'=>28),
			array('Currency', 'length', 'max'=>30),
			array('Title', 'length', 'max'=>48),
			array('Comment', 'length', 'max'=>224),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CountryId, Country, FIPS104, ISO2, ISO3, ISON, Internet, Capital, MapReference, NationalitySingular, NationalityPlural, Currency, CurrencyCode, Population, Title, Comment', 'safe', 'on'=>'search'),
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
			'CountryId' => 'Country',
			'Country' => 'Country',
			'FIPS104' => 'Fips104',
			'ISO2' => 'Iso2',
			'ISO3' => 'Iso3',
			'ISON' => 'Ison',
			'Internet' => 'Internet',
			'Capital' => 'Capital',
			'MapReference' => 'Map Reference',
			'NationalitySingular' => 'Nationality Singular',
			'NationalityPlural' => 'Nationality Plural',
			'Currency' => 'Currency',
			'CurrencyCode' => 'Currency Code',
			'Population' => 'Population',
			'Title' => 'Title',
			'Comment' => 'Comment',
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

		$criteria->compare('CountryId',$this->CountryId);
		$criteria->compare('Country',$this->Country,true);
		$criteria->compare('FIPS104',$this->FIPS104,true);
		$criteria->compare('ISO2',$this->ISO2,true);
		$criteria->compare('ISO3',$this->ISO3,true);
		$criteria->compare('ISON',$this->ISON,true);
		$criteria->compare('Internet',$this->Internet,true);
		$criteria->compare('Capital',$this->Capital,true);
		$criteria->compare('MapReference',$this->MapReference,true);
		$criteria->compare('NationalitySingular',$this->NationalitySingular,true);
		$criteria->compare('NationalityPlural',$this->NationalityPlural,true);
		$criteria->compare('Currency',$this->Currency,true);
		$criteria->compare('CurrencyCode',$this->CurrencyCode,true);
		$criteria->compare('Population',$this->Population);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('Comment',$this->Comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}