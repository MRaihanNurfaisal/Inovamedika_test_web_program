<?php
$this->breadcrumbs=array(
	'Pasien',
);

$this->menu=array(
	array('label'=>'Create pasien', 'url'=>array('create')),
	array('label'=>'Manage pasien', 'url'=>array('admin')),
);
?>

<h1>Daftar Pasien</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'wilayah-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'nama',
        'penyakit',
		'tindakan',
		'harga',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}', // Hanya menampilkan tombol Update dan Delete
        ),
    ),
)); ?>
