<?php
$this->breadcrumbs=array(
    'Wilayah'=>array('index'),
    $model->id,
);

$this->menu=array(
    array('label'=>'Daftar Wilayah', 'url'=>array('index')),
    array('label'=>'Tambah Wilayah', 'url'=>array('create')),
    array('label'=>'Edit Wilayah', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Hapus Wilayah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Anda yakin akan menghapus data ini?')),
);
?>

<h1>Detail Wilayah #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'nama',
        'keterangan',
    ),
)); ?>
<?php echo CHtml::link('Kembali', array('index', 'id'=>$model->id), array('class'=>'button')); ?>
