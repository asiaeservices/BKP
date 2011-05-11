<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProfID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ProfID), array('view', 'id'=>$data->ProfID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dari')); ?>:</b>
	<?php echo CHtml::encode($data->Dari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Smp')); ?>:</b>
	<?php echo CHtml::encode($data->Smp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JenisTrack')); ?>:</b>
	<?php echo CHtml::encode($data->JenisTrack); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstitusiID')); ?>:</b>
	<?php echo CHtml::encode($data->InstitusiID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Institusi')); ?>:</b>
	<?php echo CHtml::encode($data->Institusi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PosisiPeran')); ?>:</b>
	<?php echo CHtml::encode($data->PosisiPeran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CatatanDanPrestasi')); ?>:</b>
	<?php echo CHtml::encode($data->CatatanDanPrestasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KeySkills1')); ?>:</b>
	<?php echo CHtml::encode($data->KeySkills1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KeySkills2')); ?>:</b>
	<?php echo CHtml::encode($data->KeySkills2); ?>
	<br />

	*/ ?>

</div>