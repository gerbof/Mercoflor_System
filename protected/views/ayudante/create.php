<?php
/* @var $this AyudanteController */
/* @var $model Ayudante */

$this->breadcrumbs=array(
	'Ayudantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ayudante', 'url'=>array('index')),
	array('label'=>'Manage Ayudante', 'url'=>array('admin')),
);
?>

<h1>Create Ayudante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>