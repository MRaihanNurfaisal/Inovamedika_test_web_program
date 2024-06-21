<?php
$this->breadcrumbs=array(
	'Tindakan',
);

$this->menu=array(
	array('label'=>'Create tindakan', 'url'=>array('create')),
	array('label'=>'Manage tindakan', 'url'=>array('admin')),
);
?>

<h1>Tindakan</h1>

<?php echo CHtml::link('Buat Tindakan Baru', array('create')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'wilayah-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'penyakit',
        'solusi',
		'harga',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update} {delete}', // Hanya menampilkan tombol Update dan Delete
        ),
    ),
)); ?>
