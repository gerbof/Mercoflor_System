<?php
/* @var $this EpocaController */
/* @var $model Epoca */

$this->breadcrumbs=array(
	'Epocas'=>array('index'),
	$model->idepoca=>array('view','id'=>$model->idepoca),
	'Update',
);

$this->menu=array(
	array('label'=>'List Epoca', 'url'=>array('index')),
	array('label'=>'Create Epoca', 'url'=>array('create')),
	array('label'=>'View Epoca', 'url'=>array('view', 'id'=>$model->idepoca)),
	array('label'=>'Manage Epoca', 'url'=>array('admin')),
);
?>

<h1>Update Epoca <?php echo $model->idepoca; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>