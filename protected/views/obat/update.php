<?php
$this->breadcrumbs=array(
	'Obat'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List obat', 'url'=>array('index')),
	array('label'=>'Create obat', 'url'=>array('create')),
	array('label'=>'View obat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage obat', 'url'=>array('admin')),
);
?>

<h1>Update obat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>