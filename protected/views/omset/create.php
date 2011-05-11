<?php
$this->breadcrumbs=array(
	'Omsets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Omset', 'url'=>array('index')),
	array('label'=>'Manage Omset', 'url'=>array('admin')),
);
?>

<h1>Create Omset</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>