<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ProfID'); ?>
		<?php echo $form->textField($model,'ProfID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dari'); ?>
		<?php echo $form->textField($model,'Dari'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Smp'); ?>
		<?php echo $form->textField($model,'Smp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JenisTrack'); ?>
		<?php echo $form->textField($model,'JenisTrack',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InstitusiID'); ?>
		<?php echo $form->textField($model,'InstitusiID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Institusi'); ?>
		<?php echo $form->textField($model,'Institusi',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PosisiPeran'); ?>
		<?php echo $form->textField($model,'PosisiPeran',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CatatanDanPrestasi'); ?>
		<?php echo $form->textField($model,'CatatanDanPrestasi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KeySkills1'); ?>
		<?php echo $form->textField($model,'KeySkills1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KeySkills2'); ?>
		<?php echo $form->textField($model,'KeySkills2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->