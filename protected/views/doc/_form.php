<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doc-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DocsID'); ?>
		<?php echo $form->textField($model,'DocsID'); ?>
		<?php echo $form->error($model,'DocsID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->dropDownList($model,'UserID', CHtml::listData(User::model()->findAll(), 'UserID', 'NamaUser'));?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocName'); ?>
		<?php echo $form->textField($model,'DocName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DocName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocUrl'); ?>
		<?php echo $form->textField($model,'DocUrl',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DocUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocDesc'); ?>
		<?php echo $form->textField($model,'DocDesc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DocDesc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->