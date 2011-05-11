<?php
$this->breadcrumbs=array(
	'Businesses'=>array('index'),
	$model->InstitusiID,
);

$this->menu=array(
	array('label'=>'List Business', 'url'=>array('index')),
	array('label'=>'Create Business', 'url'=>array('create')),
	array('label'=>'Update Business', 'url'=>array('update', 'id'=>$model->InstitusiID)),
	array('label'=>'Delete Business', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->InstitusiID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Business', 'url'=>array('admin')),
);
?>

<h1>View Business #<?php echo $model->InstitusiID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'InstitusiID',
		'NamaInstitusi',
		'BadanHukum',
		'AlamatKantor',
		'Kota',
		'TanggalBerdiri',
		'TempatBerdiri',
		'FokusBidUsaha1',
		'FokusBidUsaha2',
		'PotensiLowongan',
		'Website',
		'Omset2009',
		'Omset2010',
		'Omset2011',
		'Omset2012',
		'JmlCabang',
		'JmlStafPerm',
		'JmlStafTemp',
		'PersentaseKepemilikan',
		'RintisanUsahaKe',
		'Franchise',
	),
)); ?>
