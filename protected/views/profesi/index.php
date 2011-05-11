<?php
$this->breadcrumbs=array(
	'Profesis',
);

$this->menu=array(
	array('label'=>'Create Profesi', 'url'=>array('create')),
	array('label'=>'Manage Profesi', 'url'=>array('admin')),
);
?>

<h1>Profesis</h1>
<div class="actionBar">
[<?php echo CHtml::link('New Content',array('create')); ?>]
[<?php echo CHtml::link('Manage Content',array('admin')); ?>]
</div><?php 
echo $model;
$session=new CHttpSession;   
$session->open(); 

//$modelUser = new User;
//$session['MyName'] = $modelUser->Id;
//$session['MyName']=$modelUser->nama;
//echo $session['M'];
$myuser = Yii::app()->user->id;
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'ProfID',
        'UserID',
        'Dari',
        'Smp',
        'JenisTrack',
        'InstitusiID',
        'Institusi',
        'PosisiPeran',
        'CatatanDanPrestasi',
         array(
            'class'=>'CButtonColumn',
             //'visible' => '$data->UserID == Yii::app()->user->id;',
             'buttons'=>array('delete'=>array('visible' => '$data->UserID == Yii::app()->user->id;',),
                              'update'=>array('visible' => '$data->UserID == Yii::app()->user->id;',),
                              'view'=>array('invisible' => '$data->UserID == Yii::app()->user->id;',),
                             )
            //
                                
             ),
         ),		
		
		
    ));
echo $myuser;
 /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',));
	//'summaryText'=>false,*/
?>

