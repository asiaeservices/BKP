<?php

/**
 * This is the model class for table "tbl_customer".
 *
 * The followings are the available columns in table 'tbl_customer':
 * @property integer $ClientID
 * @property integer $ProfID
 * @property integer $InsitusiID
 * @property string $ClientName
 * @property string $ProfilProyek
 * @property double $ProyekSize
 * @property string $Kontribusi
 * @property string $Keyskill1
 * @property string $Keyskill2
 */
class Customer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Customer the static model class
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
		return 'tbl_customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ClientID, ProfID, InsitusiID', 'numerical', 'integerOnly'=>true),
			array('ProyekSize', 'numerical'),
			array('ClientName', 'length', 'max'=>50),
			array('ProfilProyek, Kontribusi', 'length', 'max'=>255),
			array('Keyskill1, Keyskill2', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ClientID, ProfID, InsitusiID, ClientName, ProfilProyek, ProyekSize, Kontribusi, Keyskill1, Keyskill2', 'safe', 'on'=>'search'),
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
			'ClientID' => 'Client',
			'ProfID' => 'Prof',
			'InsitusiID' => 'Insitusi',
			'ClientName' => 'Client Name',
			'ProfilProyek' => 'Profil Proyek',
			'ProyekSize' => 'Proyek Size',
			'Kontribusi' => 'Kontribusi',
			'Keyskill1' => 'Keyskill1',
			'Keyskill2' => 'Keyskill2',
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

		$criteria->compare('ClientID',$this->ClientID);
		$criteria->compare('ProfID',$this->ProfID);
		$criteria->compare('InsitusiID',$this->InsitusiID);
		$criteria->compare('ClientName',$this->ClientName,true);
		$criteria->compare('ProfilProyek',$this->ProfilProyek,true);
		$criteria->compare('ProyekSize',$this->ProyekSize);
		$criteria->compare('Kontribusi',$this->Kontribusi,true);
		$criteria->compare('Keyskill1',$this->Keyskill1,true);
		$criteria->compare('Keyskill2',$this->Keyskill2,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}