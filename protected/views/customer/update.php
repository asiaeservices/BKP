<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->ClientID=>array('view','id'=>$model->ClientID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'View Customer', 'url'=>array('view', 'id'=>$model->ClientID)),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<h1>Update Customer <?php echo $model->ClientID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>