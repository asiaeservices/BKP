<?php

/**
 * This is the model class for table "tbl_doc".
 *
 * The followings are the available columns in table 'tbl_doc':
 * @property integer $DocsID
 * @property integer $UserID
 * @property string $DocName
 * @property string $DocUrl
 * @property string $DocDesc
 */
class Doc extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Doc the static model class
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
		return 'tbl_doc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DocsID, UserID', 'numerical', 'integerOnly'=>true),
			array('DocName, DocUrl', 'length', 'max'=>100),
			array('DocDesc', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DocsID, UserID, DocName, DocUrl, DocDesc', 'safe', 'on'=>'search'),
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
			'DocsID' => 'Docs',
			'UserID' => 'User',
			'DocName' => 'Doc Name',
			'DocUrl' => 'Doc Url',
			'DocDesc' => 'Doc Desc',
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

		$criteria->compare('DocsID',$this->DocsID);
		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('DocName',$this->DocName,true);
		$criteria->compare('DocUrl',$this->DocUrl,true);
		$criteria->compare('DocDesc',$this->DocDesc,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}