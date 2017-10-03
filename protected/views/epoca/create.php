<?php
/* @var $this EpocaController */
/* @var $model Epoca */

$this->breadcrumbs=array(
	'Epocas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Epoca', 'url'=>array('index')),
	array('label'=>'Manage Epoca', 'url'=>array('admin')),
);
?>

<h1>Create Epoca</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>