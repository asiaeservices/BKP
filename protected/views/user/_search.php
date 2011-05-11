<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NamaUser'); ?>
		<?php echo $form->textField($model,'NamaUser',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FotoUser'); ?>
		<?php echo $form->textField($model,'FotoUser',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Level'); ?>
		<?php echo $form->textField($model,'Level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AlamatUser'); ?>
		<?php echo $form->textField($model,'AlamatUser',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kota'); ?>
		<?php echo $form->textField($model,'Kota',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telpon'); ?>
		<?php echo $form->textField($model,'Telpon',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Twitter'); ?>
		<?php echo $form->textField($model,'Twitter',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Facebook'); ?>
		<?php echo $form->textField($model,'Facebook',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PinBB'); ?>
		<?php echo $form->textField($model,'PinBB',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TempatLahir'); ?>
		<?php echo $form->textField($model,'TempatLahir',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TglLahir'); ?>
		<?php echo $form->textField($model,'TglLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StatusNikah'); ?>
		<?php echo $form->textField($model,'StatusNikah',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tanggungan'); ?>
		<?php echo $form->textField($model,'Tanggungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NextPlan'); ?>
		<?php echo $form->textArea($model,'NextPlan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HelpNeeded'); ?>
		<?php echo $form->textArea($model,'HelpNeeded',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HelpOffered'); ?>
		<?php echo $form->textArea($model,'HelpOffered',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JoinDate'); ?>
		<?php echo $form->textField($model,'JoinDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->