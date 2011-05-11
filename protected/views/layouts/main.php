<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php
	

	$jqueryslidemenupath = Yii::app()->assetManager->publish(Yii::app()->basePath.'/scripts/jqueryslidemenu/');
	//Register jQuery, JS and CSS files
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerCssFile($jqueryslidemenupath.'/jqueryslidemenu.css');	
	Yii::app()->clientScript->registerScriptFile($jqueryslidemenupath.'/jqueryslidemenu.js');

	
//$namauser = Yii::app()->db->createCommand("SELECT NamaUser FROM tbl_user WHERE UserID=2")->queryScalar();
//$session=new CHttpSession;
//$session->open();
//$session['username'] = $namauser;
//echo $session['username'];
	/*
	$session=new CHttpSession;
	$session->open();
	$value1=$session['UserID'];  // get session variable 'name1'
	$value2=$session['NamaUser'];  // get session variable 'name2'
	foreach($session as $name=>$value) // traverse all session variables
	$session['NamaUser']=$value3;  // set session variable 'name3'
	*/

?>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
<?php echo "Selamat datang "; echo Yii::app()->user->id; ?>
	<div id="myslidemenu" class="jqueryslidemenu">
	<!-- <div id="mainmenu"> -->
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'My Profile','url'=>array('#'), 'items'=>array(
					array('label'=>'My Profesi', 'url'=>array('/profesi/index')),
					array('label'=>'My Business', 'url'=>array('/business/index')),
					array('label'=>'My Customer', 'url'=>array('/customer/index')),
					array('label'=>'My Docs', 'url'=>array('/doc/index')),
					)),
				array('label'=>'Listing Profesional', 'url'=>array('/listingProfesional/index')),
				array('label'=>'Listing pengusaha', 'url'=>array('/customer/index')),
				//array('label'=>'Srbac Install', 'url'=>Yii::app()->urlManager->createUrl('srbac/authitem/install')),
				array('label'=>'Manajemen User', 'url'=>Yii::app()->urlManager->createUrl('srbac/')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>

		<br style="clear: left" />
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> PT. Asia e-Services.<br/>
		All Rights Reserved.<br/>
		<?php /*echo Yii::powered();*/ ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>