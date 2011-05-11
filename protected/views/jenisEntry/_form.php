<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenis-entry-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'JenisTrack'); ?>
		<?php echo $form->textField($model,'JenisTrack',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'JenisTrack'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->