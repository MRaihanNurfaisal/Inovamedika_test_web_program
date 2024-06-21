<?php
$this->breadcrumbs=array(
	'Tindakan'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tindakan', 'url'=>array('index')),
	array('label'=>'Create tindakan', 'url'=>array('create')),
	array('label'=>'View tindakan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tindakan', 'url'=>array('admin')),
);
?>

<h1>Update tindakan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>