<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $UserID
 * @property string $NamaUser
 * @property string $FotoUser
 * @property string $Password
 * @property integer $Level
 * @property string $AlamatUser
 * @property string $Kota
 * @property string $Email
 * @property string $Telpon
 * @property string $Twitter
 * @property string $Facebook
 * @property string $PinBB
 * @property string $TempatLahir
 * @property string $TglLahir
 * @property string $StatusNikah
 * @property integer $Tanggungan
 * @property string $NextPlan
 * @property string $HelpNeeded
 * @property string $HelpOffered
 * @property string $JoinDate
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
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
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Level, Tanggungan', 'numerical', 'integerOnly'=>true),
			array('NamaUser, FotoUser, Kota, Email, Twitter, Facebook, TempatLahir', 'length', 'max'=>50),
			array('Password, Telpon', 'length', 'max'=>20),
			array('AlamatUser', 'length', 'max'=>255),
			array('PinBB, StatusNikah', 'length', 'max'=>10),
			array('TglLahir, NextPlan, HelpNeeded, HelpOffered, JoinDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('UserID, NamaUser, FotoUser, Password, Level, AlamatUser, Kota, Email, Telpon, Twitter, Facebook, PinBB, TempatLahir, TglLahir, StatusNikah, Tanggungan, NextPlan, HelpNeeded, HelpOffered, JoinDate', 'safe', 'on'=>'search'),
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
			'UserID' => 'User',
			'NamaUser' => 'Nama User',
			'FotoUser' => 'Foto User',
			'Password' => 'Password',
			'Level' => 'Level',
			'AlamatUser' => 'Alamat User',
			'Kota' => 'Kota',
			'Email' => 'Email',
			'Telpon' => 'Telpon',
			'Twitter' => 'Twitter',
			'Facebook' => 'Facebook',
			'PinBB' => 'Pin Bb',
			'TempatLahir' => 'Tempat Lahir',
			'TglLahir' => 'Tgl Lahir',
			'StatusNikah' => 'Status Nikah',
			'Tanggungan' => 'Tanggungan',
			'NextPlan' => 'Next Plan',
			'HelpNeeded' => 'Help Needed',
			'HelpOffered' => 'Help Offered',
			'JoinDate' => 'Join Date',
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

		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('NamaUser',$this->NamaUser,true);
		$criteria->compare('FotoUser',$this->FotoUser,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Level',$this->Level);
		$criteria->compare('AlamatUser',$this->AlamatUser,true);
		$criteria->compare('Kota',$this->Kota,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Telpon',$this->Telpon,true);
		$criteria->compare('Twitter',$this->Twitter,true);
		$criteria->compare('Facebook',$this->Facebook,true);
		$criteria->compare('PinBB',$this->PinBB,true);
		$criteria->compare('TempatLahir',$this->TempatLahir,true);
		$criteria->compare('TglLahir',$this->TglLahir,true);
		$criteria->compare('StatusNikah',$this->StatusNikah,true);
		$criteria->compare('Tanggungan',$this->Tanggungan);
		$criteria->compare('NextPlan',$this->NextPlan,true);
		$criteria->compare('HelpNeeded',$this->HelpNeeded,true);
		$criteria->compare('HelpOffered',$this->HelpOffered,true);
		$criteria->compare('JoinDate',$this->JoinDate,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}