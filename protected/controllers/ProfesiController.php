<?php

class ProfesiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $namauser;
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('irwan'),
				'expression'=>"!$user->isGuest && $user->level==1",
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Profesi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Profesi']))
		{
			$model->attributes=$_POST['Profesi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ProfID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Profesi']))
		{
			$model->attributes=$_POST['Profesi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ProfID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
	$dataProvider=new CActiveDataProvider('Profesi', array(
	'pagination'=>array(
    'pageSize'=>10,
		),
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	//	public $namauser;
		//$sql = "select NamaUser from tbl_user where UserID='1'";
        /*$namauser = User::model()->findByPk(1);
		if($namauser===null) return null;
		return $namauser->NamaUser;
		
		$this->render('index',array(
		'user'=>$this->namauser));	*/
			
		/*$sql = 2;	
		$mdl=Profesi::model()->findByPk($sql);
		$data['model']=$mdl->Institusi;
		
		$data['dataProvider']=new CActiveDataProvider('Profesi');
		$this->render('index',$data);*/
	}
	
		

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Profesi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Profesi']))
			$model->attributes=$_GET['Profesi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Profesi::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public static function getNamaUserById($id)
    {
        $sql = "select NamaUser from tbl_user where UserID='$id'";
        $namauser = User::model()->findBySql($sql);
		if($namauser===null) return null;
		return $itemname->itmname;
    }
	
	
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='profesi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
