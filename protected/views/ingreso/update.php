<?php
/* @var $this IngresoController */
/* @var $model Ingreso */

$this->breadcrumbs=array(
	'Ingresos'=>array('index'),
	$model->idingreso=>array('view','id'=>$model->idingreso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ingreso', 'url'=>array('index')),
	array('label'=>'Create Ingreso', 'url'=>array('create')),
	array('label'=>'View Ingreso', 'url'=>array('view', 'id'=>$model->idingreso)),
	array('label'=>'Manage Ingreso', 'url'=>array('admin')),
);
?>

<h1>Update Ingreso <?php echo $model->idingreso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>