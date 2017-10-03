<?php
/* @var $this HabitatController */
/* @var $model Habitat */

$this->breadcrumbs=array(
	'Habitats'=>array('index'),
	$model->idhabitat=>array('view','id'=>$model->idhabitat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Habitat', 'url'=>array('index')),
	array('label'=>'Create Habitat', 'url'=>array('create')),
	array('label'=>'View Habitat', 'url'=>array('view', 'id'=>$model->idhabitat)),
	array('label'=>'Manage Habitat', 'url'=>array('admin')),
);
?>

<h1>Update Habitat <?php echo $model->idhabitat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>