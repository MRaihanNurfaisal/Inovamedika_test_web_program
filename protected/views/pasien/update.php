<?php
$this->breadcrumbs=array(
	'Pasien'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List pasien', 'url'=>array('index')),
	array('label'=>'Create pasien', 'url'=>array('create')),
	array('label'=>'View pasien', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage pasien', 'url'=>array('admin')),
);
?>

<h1>Update pasien <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>