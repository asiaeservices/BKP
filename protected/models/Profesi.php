<?php

/**
 * This is the model class for table "tbl_profesi".
 *
 * The followings are the available columns in table 'tbl_profesi':
 * @property integer $ProfID
 * @property integer $UserID
 * @property string $Dari
 * @property string $Smp
 * @property string $JenisTrack
 * @property integer $InstitusiID
 * @property string $Institusi
 * @property string $PosisiPeran
 * @property string $CatatanDanPrestasi
 * @property string $KeySkills1
 * @property string $KeySkills2
 */
class Profesi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Profesi the static model class
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
		return 'tbl_profesi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ProfID, UserID, InstitusiID', 'numerical', 'integerOnly'=>true),
			array('JenisTrack', 'length', 'max'=>20),
			array('Institusi, KeySkills1, KeySkills2', 'length', 'max'=>100),
			array('PosisiPeran', 'length', 'max'=>50),
			array('CatatanDanPrestasi', 'length', 'max'=>255),
			array('Dari, Smp', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ProfID, UserID, Dari, Smp, JenisTrack, InstitusiID, Institusi, PosisiPeran, CatatanDanPrestasi, KeySkills1, KeySkills2', 'safe', 'on'=>'search'),
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
			'ProfID' => 'Id Profesi',
			'UserID' => 'Id User',
			'Dari' => 'Dari',
			'Smp' => 'Smp',
			'JenisTrack' => 'Jenis Track',
			'InstitusiID' => 'Institusi',
			'Institusi' => 'Institusi',
			'PosisiPeran' => 'Posisi Peran',
			'CatatanDanPrestasi' => 'Catatan Dan Prestasi',
			'KeySkills1' => 'Key Skills1',
			'KeySkills2' => 'Key Skills2',
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

		$criteria->compare('ProfID',$this->ProfID);
		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('Dari',$this->Dari,true);
		$criteria->compare('Smp',$this->Smp,true);
		$criteria->compare('JenisTrack',$this->JenisTrack,true);
		$criteria->compare('InstitusiID',$this->InstitusiID);
		$criteria->compare('Institusi',$this->Institusi,true);
		$criteria->compare('PosisiPeran',$this->PosisiPeran,true);
		$criteria->compare('CatatanDanPrestasi',$this->CatatanDanPrestasi,true);
		$criteria->compare('KeySkills1',$this->KeySkills1,true);
		$criteria->compare('KeySkills2',$this->KeySkills2,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}