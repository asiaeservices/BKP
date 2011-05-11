<?php
$this->breadcrumbs=array(
	'Omsets'=>array('index'),
	$model->OmsetID,
);

$this->menu=array(
	array('label'=>'List Omset', 'url'=>array('index')),
	array('label'=>'Create Omset', 'url'=>array('create')),
	array('label'=>'Update Omset', 'url'=>array('update', 'id'=>$model->OmsetID)),
	array('label'=>'Delete Omset', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->OmsetID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Omset', 'url'=>array('admin')),
);
?>

<h1>View Omset #<?php echo $model->OmsetID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'OmsetID',
	),
)); ?>
