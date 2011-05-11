<?php
$this->breadcrumbs=array(
	'Jenis Entries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisEntry', 'url'=>array('index')),
	array('label'=>'Manage JenisEntry', 'url'=>array('admin')),
);
?>

<h1>Create JenisEntry</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>