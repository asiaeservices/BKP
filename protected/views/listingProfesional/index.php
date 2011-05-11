<?php
$this->breadcrumbs=array(
	'Listing Profesional',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<?php
foreach($Listing as $List):?>
    <h6> <?php //echo $List->Institusi;?> </h6><br />
    <h6> <?php //echo $List->ProfID;?> </h6><br />
    <h6> <?php echo $List->NamaUser;?> </h6><br />
<?php endforeach;?>



<?php

/*
$this->widget('zii.widgets.grid.CGridView',array(
	'dataProvider'=>$List,
	'columns'=>array(
			'ProfID',
			'Institusi',
			'PosisiPeran',
			'NamaUser'),));
			*/

?>
<p>You may change the content of this page by modifying the file <tt><?php echo __FILE__; ?></tt>.</p>
