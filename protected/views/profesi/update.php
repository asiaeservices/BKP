<?php
$this->breadcrumbs=array(
	'Profesis'=>array('index'),
	$model->ProfID=>array('view','id'=>$model->ProfID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profesi', 'url'=>array('index')),
	array('label'=>'Create Profesi', 'url'=>array('create')),
	array('label'=>'View Profesi', 'url'=>array('view', 'id'=>$model->ProfID)),
	array('label'=>'Manage Profesi', 'url'=>array('admin')),
);
?>

<h1>Update Profesi <?php echo $model->ProfID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>