<?php
$this->breadcrumbs=array(
	'Pasien'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List pasien', 'url'=>array('index')),
	array('label'=>'Manage pasien', 'url'=>array('admin')),
);
?>

<h1>Tambah pasien</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'pasien-form',
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
        <?php echo $form->labelEx($model,'penyakit'); ?>
        <?php echo $form->textField($model,'penyakit',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'penyakit'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
