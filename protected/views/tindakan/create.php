<?php
$this->breadcrumbs=array(
	'Tindakan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tindakan', 'url'=>array('index')),
	array('label'=>'Manage tindakan', 'url'=>array('admin')),
);
?>

<h1>Create tindakan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>