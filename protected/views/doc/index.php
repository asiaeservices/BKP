<?php
$this->breadcrumbs=array(
	'Docs',
);

$this->menu=array(
	array('label'=>'Create Doc', 'url'=>array('create')),
	array('label'=>'Manage Doc', 'url'=>array('admin')),
);
?>

<h1>Docs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
