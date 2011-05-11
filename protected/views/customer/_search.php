<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ClientID'); ?>
		<?php echo $form->textField($model,'ClientID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProfID'); ?>
		<?php echo $form->textField($model,'ProfID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InsitusiID'); ?>
		<?php echo $form->textField($model,'InsitusiID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClientName'); ?>
		<?php echo $form->textField($model,'ClientName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProfilProyek'); ?>
		<?php echo $form->textField($model,'ProfilProyek',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProyekSize'); ?>
		<?php echo $form->textField($model,'ProyekSize'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kontribusi'); ?>
		<?php echo $form->textField($model,'Kontribusi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Keyskill1'); ?>
		<?php echo $form->textField($model,'Keyskill1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Keyskill2'); ?>
		<?php echo $form->textField($model,'Keyskill2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->