<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'business-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'InstitusiID'); ?>
		<?php echo $form->textField($model,'InstitusiID'); ?>
		<?php echo $form->error($model,'InstitusiID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NamaInstitusi'); ?>
		<?php echo $form->textField($model,'NamaInstitusi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NamaInstitusi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BadanHukum'); ?>
		<?php echo $form->dropDownList($model,'BadanHukum', CHtml::listData(Hukum::model()->findAll(), 'BentukID','BentukID'));?>
		<?php echo $form->error($model,'BadanHukum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AlamatKantor'); ?>
		<?php echo $form->textField($model,'AlamatKantor',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'AlamatKantor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kota'); ?>
		<?php echo $form->textField($model,'Kota',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TanggalBerdiri'); ?>
		<?php echo $form->textField($model,'TanggalBerdiri'); ?>
		<?php echo $form->error($model,'TanggalBerdiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TempatBerdiri'); ?>
		<?php echo $form->textField($model,'TempatBerdiri',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'TempatBerdiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FokusBidUsaha1'); ?>
		<?php echo $form->textField($model,'FokusBidUsaha1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'FokusBidUsaha1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FokusBidUsaha2'); ?>
		<?php echo $form->textField($model,'FokusBidUsaha2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'FokusBidUsaha2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PotensiLowongan'); ?>
		<?php echo $form->textField($model,'PotensiLowongan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PotensiLowongan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Website'); ?>
		<?php echo $form->textField($model,'Website',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Omset2009'); ?>
		<?php echo $form->textField($model,'Omset2009',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Omset2009'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Omset2010'); ?>
		<?php echo $form->textField($model,'Omset2010',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Omset2010'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Omset2011'); ?>
		<?php echo $form->textField($model,'Omset2011',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Omset2011'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Omset2012'); ?>
		<?php echo $form->textField($model,'Omset2012',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Omset2012'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JmlCabang'); ?>
		<?php echo $form->textField($model,'JmlCabang'); ?>
		<?php echo $form->error($model,'JmlCabang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JmlStafPerm'); ?>
		<?php echo $form->textField($model,'JmlStafPerm'); ?>
		<?php echo $form->error($model,'JmlStafPerm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JmlStafTemp'); ?>
		<?php echo $form->textField($model,'JmlStafTemp'); ?>
		<?php echo $form->error($model,'JmlStafTemp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PersentaseKepemilikan'); ?>
		<?php echo $form->textField($model,'PersentaseKepemilikan'); ?>
		<?php echo $form->error($model,'PersentaseKepemilikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RintisanUsahaKe'); ?>
		<?php echo $form->textField($model,'RintisanUsahaKe'); ?>
		<?php echo $form->error($model,'RintisanUsahaKe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Franchise'); ?>
		<?php echo $form->textField($model,'Franchise',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Franchise'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->