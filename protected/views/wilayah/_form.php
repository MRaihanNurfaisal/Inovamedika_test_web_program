<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'wilayah-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'nama'); ?>
        <?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'nama'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'keterangan'); ?>
        <?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'keterangan'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        <?php echo CHtml::link('Cancel', array('index', 'id'=>$model->id), array('class'=>'button')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
