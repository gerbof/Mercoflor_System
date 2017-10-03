<?php
/* @var $this HabitatController */
/* @var $model Habitat */

$this->breadcrumbs=array(
	'Habitats'=>array('index'),
	$model->idhabitat,
);

$this->menu=array(
	array('label'=>'List Habitat', 'url'=>array('index')),
	array('label'=>'Create Habitat', 'url'=>array('create')),
	array('label'=>'Update Habitat', 'url'=>array('update', 'id'=>$model->idhabitat)),
	array('label'=>'Delete Habitat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idhabitat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Habitat', 'url'=>array('admin')),
);
?>

<h1>View Habitat #<?php echo $model->idhabitat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idhabitat',
		'descripcion',
	),
)); ?>
