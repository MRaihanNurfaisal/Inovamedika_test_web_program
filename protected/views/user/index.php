<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Daftar Users</h1>

<?php echo CHtml::link('Buat User Baru', array('create')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'wilayah-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'username',
        'password',
        'email',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update} {delete}', // Hanya menampilkan tombol Update dan Delete
        ),
    ),
)); ?>
