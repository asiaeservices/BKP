<?php
$this->breadcrumbs=array(
	'Businesses'=>array('index'),
	$model->InstitusiID=>array('view','id'=>$model->InstitusiID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Business', 'url'=>array('index')),
	array('label'=>'Create Business', 'url'=>array('create')),
	array('label'=>'View Business', 'url'=>array('view', 'id'=>$model->InstitusiID)),
	array('label'=>'Manage Business', 'url'=>array('admin')),
);
?>

<h1>Update Business <?php echo $model->InstitusiID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>