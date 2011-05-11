<?php
$this->breadcrumbs=array(
	'Omsets'=>array('index'),
	$model->OmsetID=>array('view','id'=>$model->OmsetID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Omset', 'url'=>array('index')),
	array('label'=>'Create Omset', 'url'=>array('create')),
	array('label'=>'View Omset', 'url'=>array('view', 'id'=>$model->OmsetID)),
	array('label'=>'Manage Omset', 'url'=>array('admin')),
);
?>

<h1>Update Omset <?php echo $model->OmsetID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>