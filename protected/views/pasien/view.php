<?php
$this->breadcrumbs=array(
	'Pasien'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List pasien', 'url'=>array('index')),
	array('label'=>'Create pasien', 'url'=>array('create')),
	array('label'=>'Update pasien', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete pasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage pasien', 'url'=>array('admin')),
);
?>

<h1>View pasien #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'penyakit',
		'tindakan',
		'harga',
	),
)); ?>
<?php echo CHtml::link('Kembali', array('index', 'id'=>$model->id), array('class'=>'button')); ?>
