<?php
/* @var $this EspecieController */
/* @var $model Especie */

$this->breadcrumbs=array(
	'Especies'=>array('index'),
	$model->idespecie,
);

$this->menu=array(
	array('label'=>'List Especie', 'url'=>array('index')),
	array('label'=>'Create Especie', 'url'=>array('create')),
	array('label'=>'Update Especie', 'url'=>array('update', 'id'=>$model->idespecie)),
	array('label'=>'Delete Especie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idespecie),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Especie', 'url'=>array('admin')),
);
?>

<h1>View Especie #<?php echo $model->idespecie; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idespecie',
		'nom_vulgar',
		'nom_cientifico',
		'idhabitat_especie',
		'idregion_especie',
		'idepoca_especie',
		'idtipo_especie',
	),
)); ?>
