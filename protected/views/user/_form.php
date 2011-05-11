<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NamaUser'); ?>
		<?php echo $form->textField($model,'NamaUser',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NamaUser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FotoUser'); ?>
		<?php echo $form->textField($model,'FotoUser',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FotoUser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Level'); ?>
		<?php echo $form->textField($model,'Level'); ?>
		<?php echo $form->error($model,'Level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AlamatUser'); ?>
		<?php echo $form->textField($model,'AlamatUser',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'AlamatUser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kota'); ?>
		<?php echo $form->textField($model,'Kota',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telpon'); ?>
		<?php echo $form->textField($model,'Telpon',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Telpon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Twitter'); ?>
		<?php echo $form->textField($model,'Twitter',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Twitter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Facebook'); ?>
		<?php echo $form->textField($model,'Facebook',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PinBB'); ?>
		<?php echo $form->textField($model,'PinBB',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PinBB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TempatLahir'); ?>
		<?php echo $form->textField($model,'TempatLahir',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TempatLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TglLahir'); ?>
		<?php echo $form->textField($model,'TglLahir'); ?>
		<?php echo $form->error($model,'TglLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StatusNikah'); ?>
		<?php echo $form->textField($model,'StatusNikah',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'StatusNikah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tanggungan'); ?>
		<?php echo $form->textField($model,'Tanggungan'); ?>
		<?php echo $form->error($model,'Tanggungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NextPlan'); ?>
		<?php echo $form->textArea($model,'NextPlan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'NextPlan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HelpNeeded'); ?>
		<?php echo $form->textArea($model,'HelpNeeded',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'HelpNeeded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HelpOffered'); ?>
		<?php echo $form->textArea($model,'HelpOffered',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'HelpOffered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JoinDate'); ?>
		<?php echo $form->textField($model,'JoinDate'); ?>
		<?php echo $form->error($model,'JoinDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->