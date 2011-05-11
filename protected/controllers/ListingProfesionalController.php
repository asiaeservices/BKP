<?php

class ListingProfesionalController extends Controller
{
	public function actionIndex()
	{
		$Criteria = new CDbCriteria();
		$Criteria->select = "*";
		$Criteria->alias="u1";
		//$Criteria->join="LEFT JOIN 'tbl_profesi' ON 'tbl_profesi'.'UserID' = 'u1'.'UserID'";
		//$Criteria->order = "UserID";
		$this->render('index', array('Listing'=>ListingProfesional::model()->findAll($Criteria), ));
		
	/*$dataProvider=new CActiveDataProvider('listingProfesi', array(
	'pagination'=>array(
    'pageSize'=>3,
		),
		));
		$this->render('index',array(
			'List'=>$dataProvider,
		));		
		*/
	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}


	*/
	
}