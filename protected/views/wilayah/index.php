<?php
$this->breadcrumbs=array(
	'Wilayah',
);

$this->menu=array(
	array('label'=>'Create Wilayah', 'url'=>array('create')),
	array('label'=>'Manage Wilayah', 'url'=>array('admin')),
);
?>

<h1>Daftar Wilayah</h1>

<?php echo CHtml::link('Buat Wilayah Baru', array('create')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'wilayah-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'nama',
        'keterangan',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update} {delete}', // Hanya menampilkan tombol Update dan Delete
        ),
    ),
)); ?>
