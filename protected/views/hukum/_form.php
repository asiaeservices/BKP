<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hukum-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'BentukID'); ?>
		<?php echo $form->textField($model,'BentukID',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'BentukID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->