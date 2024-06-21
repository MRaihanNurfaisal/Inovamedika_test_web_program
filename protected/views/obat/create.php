<?php
$this->breadcrumbs=array(
	'Obat'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List obat', 'url'=>array('index')),
	array('label'=>'Manage obat', 'url'=>array('admin')),
);
?>

<h1>Create obat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>