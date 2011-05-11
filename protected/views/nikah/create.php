<?php
$this->breadcrumbs=array(
	'Nikahs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nikah', 'url'=>array('index')),
	array('label'=>'Manage Nikah', 'url'=>array('admin')),
);
?>

<h1>Create Nikah</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>