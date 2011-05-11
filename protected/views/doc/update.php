<?php
$this->breadcrumbs=array(
	'Docs'=>array('index'),
	$model->DocsID=>array('view','id'=>$model->DocsID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doc', 'url'=>array('index')),
	array('label'=>'Create Doc', 'url'=>array('create')),
	array('label'=>'View Doc', 'url'=>array('view', 'id'=>$model->DocsID)),
	array('label'=>'Manage Doc', 'url'=>array('admin')),
);
?>

<h1>Update Doc <?php echo $model->DocsID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>