<?php
$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pegawai', 'url'=>array('index')),
	array('label'=>'Create Pegawai', 'url'=>array('create')),
	array('label'=>'Update Pegawai', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
);
?>

<h1>View Pegawai #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'umur',
	),
)); ?>
<?php echo CHtml::link('Kembali', array('index', 'id'=>$model->id), array('class'=>'button')); ?>
