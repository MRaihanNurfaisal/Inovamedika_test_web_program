<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasien-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo CHtml::activeTextField($model,'nama',array('size'=>60,'maxlength'=>255, 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penyakit'); ?>
		<?php echo CHtml::activeTextField($model,'penyakit',array('size'=>60,'maxlength'=>255, 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'penyakit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tindakan'); ?>
		<?php echo $form->textField($model,'tindakan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tindakan'); ?>
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