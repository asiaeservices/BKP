<?php
$this->breadcrumbs=array(
	'Hukums'=>array('index'),
	$model->BentukID=>array('view','id'=>$model->BentukID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hukum', 'url'=>array('index')),
	array('label'=>'Create Hukum', 'url'=>array('create')),
	array('label'=>'View Hukum', 'url'=>array('view', 'id'=>$model->BentukID)),
	array('label'=>'Manage Hukum', 'url'=>array('admin')),
);
?>

<h1>Update Hukum <?php echo $model->BentukID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>