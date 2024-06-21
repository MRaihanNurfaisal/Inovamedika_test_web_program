<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Selamat datang di klinik ABC</h1>

<p>Silahkan lakukan pendaftaran untuk pasien</p>

<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Daftar', 'url'=>array('/pasien/create'))
			),
		)); ?>