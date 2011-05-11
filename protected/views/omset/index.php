<?php
$this->breadcrumbs=array(
	'Omsets',
);

$this->menu=array(
	array('label'=>'Create Omset', 'url'=>array('create')),
	array('label'=>'Manage Omset', 'url'=>array('admin')),
);
?>

<h1>Omsets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
