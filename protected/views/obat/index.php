<?php
$this->breadcrumbs=array(
	'Obat',
);

$this->menu=array(
	array('label'=>'Create obat', 'url'=>array('create')),
	array('label'=>'Manage obat', 'url'=>array('admin')),
);
?>

<h1>Obat</h1>

<?php echo CHtml::link('Buat Obat Baru', array('create')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'wilayah-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'nama',
        'keterangan',
		'harga',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update} {delete}', // Hanya menampilkan tombol Update dan Delete
        ),
    ),
)); ?>