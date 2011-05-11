<?php
$this->breadcrumbs=array(
	'Nikahs'=>array('index'),
	$model->NikahID,
);

$this->menu=array(
	array('label'=>'List Nikah', 'url'=>array('index')),
	array('label'=>'Create Nikah', 'url'=>array('create')),
	array('label'=>'Update Nikah', 'url'=>array('update', 'id'=>$model->NikahID)),
	array('label'=>'Delete Nikah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NikahID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nikah', 'url'=>array('admin')),
);
?>

<h1>View Nikah #<?php echo $model->NikahID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NikahID',
	),
)); ?>
