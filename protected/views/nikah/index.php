<?php
$this->breadcrumbs=array(
	'Nikahs',
);

$this->menu=array(
	array('label'=>'Create Nikah', 'url'=>array('create')),
	array('label'=>'Manage Nikah', 'url'=>array('admin')),
);
?>

<h1>Nikahs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
