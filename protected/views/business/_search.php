<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'InstitusiID'); ?>
		<?php echo $form->textField($model,'InstitusiID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NamaInstitusi'); ?>
		<?php echo $form->textField($model,'NamaInstitusi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BadanHukum'); ?>
		<?php echo $form->textField($model,'BadanHukum',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AlamatKantor'); ?>
		<?php echo $form->textField($model,'AlamatKantor',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kota'); ?>
		<?php echo $form->textField($model,'Kota',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TanggalBerdiri'); ?>
		<?php echo $form->textField($model,'TanggalBerdiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TempatBerdiri'); ?>
		<?php echo $form->textField($model,'TempatBerdiri',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FokusBidUsaha1'); ?>
		<?php echo $form->textField($model,'FokusBidUsaha1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FokusBidUsaha2'); ?>
		<?php echo $form->textField($model,'FokusBidUsaha2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PotensiLowongan'); ?>
		<?php echo $form->textField($model,'PotensiLowongan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Website'); ?>
		<?php echo $form->textField($model,'Website',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Omset2009'); ?>
		<?php echo $form->textField($model,'Omset2009',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Omset2010'); ?>
		<?php echo $form->textField($model,'Omset2010',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Omset2011'); ?>
		<?php echo $form->textField($model,'Omset2011',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Omset2012'); ?>
		<?php echo $form->textField($model,'Omset2012',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JmlCabang'); ?>
		<?php echo $form->textField($model,'JmlCabang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JmlStafPerm'); ?>
		<?php echo $form->textField($model,'JmlStafPerm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JmlStafTemp'); ?>
		<?php echo $form->textField($model,'JmlStafTemp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PersentaseKepemilikan'); ?>
		<?php echo $form->textField($model,'PersentaseKepemilikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RintisanUsahaKe'); ?>
		<?php echo $form->textField($model,'RintisanUsahaKe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Franchise'); ?>
		<?php echo $form->textField($model,'Franchise',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->