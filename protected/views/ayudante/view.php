<?php
/* @var $this AyudanteController */
/* @var $model Ayudante */

$this->breadcrumbs=array(
	'Ayudantes'=>array('index'),
	$model->idayudante,
);

$this->menu=array(
	array('label'=>'List Ayudante', 'url'=>array('index')),
	array('label'=>'Create Ayudante', 'url'=>array('create')),
	array('label'=>'Update Ayudante', 'url'=>array('update', 'id'=>$model->idayudante)),
	array('label'=>'Delete Ayudante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idayudante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ayudante', 'url'=>array('admin')),
);
?>

<h1>View Ayudante #<?php echo $model->idayudante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idayudante',
		'dni',
		'nomyape',
		'idusuario_ayudante',
	),
)); ?>
