<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tindakan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'penyakit'); ?>
		<?php echo $form->textField($model,'penyakit',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'penyakit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solusi'); ?>
		<?php echo $form->textField($model,'solusi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'solusi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::link('Cancel', array('index', 'id'=>$model->id), array('class'=>'button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->