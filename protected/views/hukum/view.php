<?php
$this->breadcrumbs=array(
	'Hukums'=>array('index'),
	$model->BentukID,
);

$this->menu=array(
	array('label'=>'List Hukum', 'url'=>array('index')),
	array('label'=>'Create Hukum', 'url'=>array('create')),
	array('label'=>'Update Hukum', 'url'=>array('update', 'id'=>$model->BentukID)),
	array('label'=>'Delete Hukum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BentukID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hukum', 'url'=>array('admin')),
);
?>

<h1>View Hukum #<?php echo $model->BentukID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'BentukID',
	),
)); ?>
