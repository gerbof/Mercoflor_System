<?php
/* @var $this EpocaController */
/* @var $model Epoca */

$this->breadcrumbs=array(
	'Epocas'=>array('index'),
	$model->idepoca,
);

$this->menu=array(
	array('label'=>'List Epoca', 'url'=>array('index')),
	array('label'=>'Create Epoca', 'url'=>array('create')),
	array('label'=>'Update Epoca', 'url'=>array('update', 'id'=>$model->idepoca)),
	array('label'=>'Delete Epoca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idepoca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Epoca', 'url'=>array('admin')),
);
?>

<h1>View Epoca #<?php echo $model->idepoca; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idepoca',
		'descripcion',
	),
)); ?>
