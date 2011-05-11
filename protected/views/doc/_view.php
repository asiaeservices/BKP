<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocsID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DocsID), array('view', 'id'=>$data->DocsID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocName')); ?>:</b>
	<?php echo CHtml::encode($data->DocName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocUrl')); ?>:</b>
	<?php echo CHtml::encode($data->DocUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocDesc')); ?>:</b>
	<?php echo CHtml::encode($data->DocDesc); ?>
	<br />


</div>