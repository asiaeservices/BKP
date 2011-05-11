<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClientID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ClientID), array('view', 'id'=>$data->ClientID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProfID')); ?>:</b>
	<?php echo CHtml::encode($data->ProfID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InsitusiID')); ?>:</b>
	<?php echo CHtml::encode($data->InsitusiID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClientName')); ?>:</b>
	<?php echo CHtml::encode($data->ClientName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProfilProyek')); ?>:</b>
	<?php echo CHtml::encode($data->ProfilProyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProyekSize')); ?>:</b>
	<?php echo CHtml::encode($data->ProyekSize); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kontribusi')); ?>:</b>
	<?php echo CHtml::encode($data->Kontribusi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Keyskill1')); ?>:</b>
	<?php echo CHtml::encode($data->Keyskill1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Keyskill2')); ?>:</b>
	<?php echo CHtml::encode($data->Keyskill2); ?>
	<br />

	*/ ?>

</div>