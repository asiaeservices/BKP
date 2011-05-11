<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ClientID'); ?>
		<?php echo $form->textField($model,'ClientID'); ?>
		<?php echo $form->error($model,'ClientID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProfID'); ?>
		<?php echo $form->dropDownList($model,'ProfID', CHtml::listData(Profesi::model()->findAll(), 'ProfID','UserID','JenisTrack'));?>
		<?php echo $form->error($model,'ProfID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InsitusiID'); ?>
		<?php echo $form->textField($model,'InsitusiID'); ?>
		<?php echo $form->error($model,'InsitusiID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClientName'); ?>
		<?php echo $form->textField($model,'ClientName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ClientName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProfilProyek'); ?>
		<?php echo $form->textField($model,'ProfilProyek',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ProfilProyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProyekSize'); ?>
		<?php echo $form->textField($model,'ProyekSize'); ?>
		<?php echo $form->error($model,'ProyekSize'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kontribusi'); ?>
		<?php echo $form->textField($model,'Kontribusi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Kontribusi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Keyskill1'); ?>
		<?php echo $form->textField($model,'Keyskill1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Keyskill1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Keyskill2'); ?>
		<?php echo $form->textField($model,'Keyskill2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Keyskill2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->