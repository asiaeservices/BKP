<?php
$this->breadcrumbs=array(
	'Jenis Entries',
);

$this->menu=array(
	array('label'=>'Create JenisEntry', 'url'=>array('create')),
	array('label'=>'Manage JenisEntry', 'url'=>array('admin')),
);
?>

<h1>Jenis Entries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
