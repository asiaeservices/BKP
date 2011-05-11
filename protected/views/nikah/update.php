<?php
$this->breadcrumbs=array(
	'Nikahs'=>array('index'),
	$model->NikahID=>array('view','id'=>$model->NikahID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nikah', 'url'=>array('index')),
	array('label'=>'Create Nikah', 'url'=>array('create')),
	array('label'=>'View Nikah', 'url'=>array('view', 'id'=>$model->NikahID)),
	array('label'=>'Manage Nikah', 'url'=>array('admin')),
);
?>

<h1>Update Nikah <?php echo $model->NikahID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>