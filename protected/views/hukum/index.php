<?php
$this->breadcrumbs=array(
	'Hukums',
);

$this->menu=array(
	array('label'=>'Create Hukum', 'url'=>array('create')),
	array('label'=>'Manage Hukum', 'url'=>array('admin')),
);
?>

<h1>Hukums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
