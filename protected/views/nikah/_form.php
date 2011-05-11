<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nikah-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NikahID'); ?>
		<?php echo $form->textField($model,'NikahID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'NikahID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->