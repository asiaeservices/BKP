<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ProfID'); ?>
		<?php echo $form->textField($model,'ProfID'); ?>
		<?php echo $form->error($model,'ProfID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php $id = Yii::app()->user->id;?>
		<?php echo $form->textField($model,'UserID', array('value'=>$id)); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dari'); ?>
		<?php echo $form->textField($model,'Dari'); ?>
		<?php echo $form->error($model,'Dari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Smp'); ?>
		<?php echo $form->textField($model,'Smp'); ?>
		<?php echo $form->error($model,'Smp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JenisTrack'); ?>
		<?php echo $form->textField($model,'JenisTrack',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'JenisTrack'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstitusiID'); ?>
		<?php echo $form->textField($model,'InstitusiID'); ?>
		<?php echo $form->error($model,'InstitusiID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Institusi'); ?>
		<?php echo $form->textField($model,'Institusi',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Institusi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PosisiPeran'); ?>
		<?php echo $form->textField($model,'PosisiPeran',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PosisiPeran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CatatanDanPrestasi'); ?>
		<?php echo $form->textField($model,'CatatanDanPrestasi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'CatatanDanPrestasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KeySkills1'); ?>
		<?php echo $form->textField($model,'KeySkills1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'KeySkills1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KeySkills2'); ?>
		<?php echo $form->textField($model,'KeySkills2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'KeySkills2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->