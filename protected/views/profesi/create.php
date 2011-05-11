<?php
$this->breadcrumbs=array(
	'Profesis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Profesi', 'url'=>array('index')),
	array('label'=>'Manage Profesi', 'url'=>array('admin')),
);
?>

<h1>Create Profesi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>