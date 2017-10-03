<?php
/* @var $this EspecieIngresadaController */
/* @var $model EspecieIngresada */

$this->breadcrumbs=array(
	'Especie Ingresadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EspecieIngresada', 'url'=>array('index')),
	array('label'=>'Manage EspecieIngresada', 'url'=>array('admin')),
);
?>

<h1>Create EspecieIngresada</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>