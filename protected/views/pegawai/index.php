<?php
$this->breadcrumbs=array(
	'Pegawai',
);

$this->menu=array(
	array('label'=>'Create Pegawai', 'url'=>array('create')),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Daftar Pegawai</h1>

<?php echo CHtml::link('Buat Pegawai Baru', array('create')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'wilayah-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'nama',
        'umur',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update} {delete}', // Hanya menampilkan tombol Update dan Delete
        ),
    ),
)); ?>