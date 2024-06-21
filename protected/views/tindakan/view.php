<?php
$this->breadcrumbs=array(
	'Tindakans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tindakan', 'url'=>array('index')),
	array('label'=>'Create tindakan', 'url'=>array('create')),
	array('label'=>'Update tindakan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tindakan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage tindakan', 'url'=>array('admin')),
);
?>

<h1>View tindakan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'penyakit',
		'solusi',
		'harga',
	),
)); ?>
<?php echo CHtml::link('Kembali', array('index', 'id'=>$model->id), array('class'=>'button')); ?>
