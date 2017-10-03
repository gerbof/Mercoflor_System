<?php
/* @var $this HabitatController */
/* @var $model Habitat */

$this->breadcrumbs=array(
	'Habitats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Habitat', 'url'=>array('index')),
	array('label'=>'Manage Habitat', 'url'=>array('admin')),
);
?>

<h1>Create Habitat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>