<?php

/**
 * This is the model class for table "tbl_business".
 *
 * The followings are the available columns in table 'tbl_business':
 * @property integer $InstitusiID
 * @property string $NamaInstitusi
 * @property string $BadanHukum
 * @property string $AlamatKantor
 * @property string $Kota
 * @property string $TanggalBerdiri
 * @property string $TempatBerdiri
 * @property string $FokusBidUsaha1
 * @property string $FokusBidUsaha2
 * @property string $PotensiLowongan
 * @property string $Website
 * @property string $Omset2009
 * @property string $Omset2010
 * @property string $Omset2011
 * @property string $Omset2012
 * @property integer $JmlCabang
 * @property integer $JmlStafPerm
 * @property integer $JmlStafTemp
 * @property integer $PersentaseKepemilikan
 * @property integer $RintisanUsahaKe
 * @property string $Franchise
 */
class Business extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Business the static model class
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
		return 'tbl_business';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstitusiID, JmlCabang, JmlStafPerm, JmlStafTemp, PersentaseKepemilikan, RintisanUsahaKe', 'numerical', 'integerOnly'=>true),
			array('NamaInstitusi, Website', 'length', 'max'=>50),
			array('BadanHukum', 'length', 'max'=>10),
			array('AlamatKantor, FokusBidUsaha1, FokusBidUsaha2', 'length', 'max'=>100),
			array('Kota, TempatBerdiri, Omset2009, Omset2010, Omset2011, Omset2012', 'length', 'max'=>20),
			array('PotensiLowongan', 'length', 'max'=>255),
			array('Franchise', 'length', 'max'=>1),
			array('TanggalBerdiri', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('InstitusiID, NamaInstitusi, BadanHukum, AlamatKantor, Kota, TanggalBerdiri, TempatBerdiri, FokusBidUsaha1, FokusBidUsaha2, PotensiLowongan, Website, Omset2009, Omset2010, Omset2011, Omset2012, JmlCabang, JmlStafPerm, JmlStafTemp, PersentaseKepemilikan, RintisanUsahaKe, Franchise', 'safe', 'on'=>'search'),
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
			'InstitusiID' => 'Institusi',
			'NamaInstitusi' => 'Nama Institusi',
			'BadanHukum' => 'Badan Hukum',
			'AlamatKantor' => 'Alamat Kantor',
			'Kota' => 'Kota',
			'TanggalBerdiri' => 'Tanggal Berdiri',
			'TempatBerdiri' => 'Tempat Berdiri',
			'FokusBidUsaha1' => 'Fokus Bid Usaha1',
			'FokusBidUsaha2' => 'Fokus Bid Usaha2',
			'PotensiLowongan' => 'Potensi Lowongan',
			'Website' => 'Website',
			'Omset2009' => 'Omset2009',
			'Omset2010' => 'Omset2010',
			'Omset2011' => 'Omset2011',
			'Omset2012' => 'Omset2012',
			'JmlCabang' => 'Jml Cabang',
			'JmlStafPerm' => 'Jml Staf Perm',
			'JmlStafTemp' => 'Jml Staf Temp',
			'PersentaseKepemilikan' => 'Persentase Kepemilikan',
			'RintisanUsahaKe' => 'Rintisan Usaha Ke',
			'Franchise' => 'Franchise',
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

		$criteria->compare('InstitusiID',$this->InstitusiID);
		$criteria->compare('NamaInstitusi',$this->NamaInstitusi,true);
		$criteria->compare('BadanHukum',$this->BadanHukum,true);
		$criteria->compare('AlamatKantor',$this->AlamatKantor,true);
		$criteria->compare('Kota',$this->Kota,true);
		$criteria->compare('TanggalBerdiri',$this->TanggalBerdiri,true);
		$criteria->compare('TempatBerdiri',$this->TempatBerdiri,true);
		$criteria->compare('FokusBidUsaha1',$this->FokusBidUsaha1,true);
		$criteria->compare('FokusBidUsaha2',$this->FokusBidUsaha2,true);
		$criteria->compare('PotensiLowongan',$this->PotensiLowongan,true);
		$criteria->compare('Website',$this->Website,true);
		$criteria->compare('Omset2009',$this->Omset2009,true);
		$criteria->compare('Omset2010',$this->Omset2010,true);
		$criteria->compare('Omset2011',$this->Omset2011,true);
		$criteria->compare('Omset2012',$this->Omset2012,true);
		$criteria->compare('JmlCabang',$this->JmlCabang);
		$criteria->compare('JmlStafPerm',$this->JmlStafPerm);
		$criteria->compare('JmlStafTemp',$this->JmlStafTemp);
		$criteria->compare('PersentaseKepemilikan',$this->PersentaseKepemilikan);
		$criteria->compare('RintisanUsahaKe',$this->RintisanUsahaKe);
		$criteria->compare('Franchise',$this->Franchise,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}