<?php
$this->breadcrumbs=array(
	'Wilayah'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wilayah', 'url'=>array('index')),
	array('label'=>'Manage Wilayah', 'url'=>array('admin')),
	array('label'=>'Daftar Wilayah', 'url'=>array('index')),
	
);
?>

<h1>Create Wilayah</h1>

<h1>Buat Wilayah Baru</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>