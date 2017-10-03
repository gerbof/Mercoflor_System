<?php
/* @var $this AyudanteController */
/* @var $model Ayudante */

$this->breadcrumbs=array(
	'Ayudantes'=>array('index'),
	$model->idayudante=>array('view','id'=>$model->idayudante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ayudante', 'url'=>array('index')),
	array('label'=>'Create Ayudante', 'url'=>array('create')),
	array('label'=>'View Ayudante', 'url'=>array('view', 'id'=>$model->idayudante)),
	array('label'=>'Manage Ayudante', 'url'=>array('admin')),
);
?>

<h1>Update Ayudante <?php echo $model->idayudante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>