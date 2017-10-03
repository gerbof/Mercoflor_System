<?php
/* @var $this EspecieController */
/* @var $model Especie */

$this->breadcrumbs=array(
	'Especies'=>array('index'),
	$model->idespecie=>array('view','id'=>$model->idespecie),
	'Update',
);

$this->menu=array(
	array('label'=>'List Especie', 'url'=>array('index')),
	array('label'=>'Create Especie', 'url'=>array('create')),
	array('label'=>'View Especie', 'url'=>array('view', 'id'=>$model->idespecie)),
	array('label'=>'Manage Especie', 'url'=>array('admin')),
);
?>

<h1>Update Especie <?php echo $model->idespecie; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>