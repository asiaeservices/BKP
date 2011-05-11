<?php
$this->breadcrumbs=array(
	'Docs'=>array('index'),
	$model->DocsID,
);

$this->menu=array(
	array('label'=>'List Doc', 'url'=>array('index')),
	array('label'=>'Create Doc', 'url'=>array('create')),
	array('label'=>'Update Doc', 'url'=>array('update', 'id'=>$model->DocsID)),
	array('label'=>'Delete Doc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DocsID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doc', 'url'=>array('admin')),
);
?>

<h1>View Doc #<?php echo $model->DocsID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DocsID',
		'UserID',
		'DocName',
		'DocUrl',
		'DocDesc',
	),
)); ?>
