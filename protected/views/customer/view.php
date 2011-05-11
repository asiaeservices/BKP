<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->ClientID,
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Update Customer', 'url'=>array('update', 'id'=>$model->ClientID)),
	array('label'=>'Delete Customer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ClientID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<h1>View Customer #<?php echo $model->ClientID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ClientID',
		'ProfID',
		'InsitusiID',
		'ClientName',
		'ProfilProyek',
		'ProyekSize',
		'Kontribusi',
		'Keyskill1',
		'Keyskill2',
	),
)); ?>
