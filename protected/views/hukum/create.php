<?php
$this->breadcrumbs=array(
	'Hukums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hukum', 'url'=>array('index')),
	array('label'=>'Manage Hukum', 'url'=>array('admin')),
);
?>

<h1>Create Hukum</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>