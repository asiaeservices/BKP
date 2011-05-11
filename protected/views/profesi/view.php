<?php
$this->breadcrumbs=array(
	'Profesis'=>array('index'),
	$model->ProfID,
);

$this->menu=array(
	array('label'=>'List Profesi', 'url'=>array('index')),
	array('label'=>'Create Profesi', 'url'=>array('create')),
	array('label'=>'Update Profesi', 'url'=>array('update', 'id'=>$model->ProfID)),
	array('label'=>'Delete Profesi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ProfID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesi', 'url'=>array('admin')),
);
?>

<h1>View Profesi #<?php echo $model->ProfID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ProfID',
		'UserID',
		'Dari',
		'Smp',
		'JenisTrack',
		'InstitusiID',
		'Institusi',
		'PosisiPeran',
		'CatatanDanPrestasi',
		'KeySkills1',
		'KeySkills2',
	),
)); ?>
