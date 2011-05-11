<?php
$this->breadcrumbs=array(
	'Jenis Entries'=>array('index'),
	$model->JenisTrack=>array('view','id'=>$model->JenisTrack),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisEntry', 'url'=>array('index')),
	array('label'=>'Create JenisEntry', 'url'=>array('create')),
	array('label'=>'View JenisEntry', 'url'=>array('view', 'id'=>$model->JenisTrack)),
	array('label'=>'Manage JenisEntry', 'url'=>array('admin')),
);
?>

<h1>Update JenisEntry <?php echo $model->JenisTrack; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>