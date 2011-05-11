<?php
$this->breadcrumbs=array(
	'Docs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Doc', 'url'=>array('index')),
	array('label'=>'Manage Doc', 'url'=>array('admin')),
);
?>

<h1>Create Doc</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>