<?php
$this->breadcrumbs=array(
	'Wilayah'=>array('index'),
	$model->nama=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wilayah', 'url'=>array('index')),
	array('label'=>'Create Wilayah', 'url'=>array('create')),
	array('label'=>'View Wilayah', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Wilayah', 'url'=>array('admin')),
	array('label'=>'Daftar Wilayah', 'url'=>array('index')),
);
?>

<h1>Update Wilayah <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>