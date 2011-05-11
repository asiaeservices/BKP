<?php
$this->breadcrumbs=array(
	'Jenis Entries'=>array('index'),
	$model->JenisTrack,
);

$this->menu=array(
	array('label'=>'List JenisEntry', 'url'=>array('index')),
	array('label'=>'Create JenisEntry', 'url'=>array('create')),
	array('label'=>'Update JenisEntry', 'url'=>array('update', 'id'=>$model->JenisTrack)),
	array('label'=>'Delete JenisEntry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->JenisTrack),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisEntry', 'url'=>array('admin')),
);
?>

<h1>View JenisEntry #<?php echo $model->JenisTrack; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'JenisTrack',
	),
)); ?>
