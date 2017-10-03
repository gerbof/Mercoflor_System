<?php
/* @var $this EspecieIngresadaController */
/* @var $model EspecieIngresada */

$this->breadcrumbs=array(
	'Especie Ingresadas'=>array('index'),
	$model->idesp_ing=>array('view','id'=>$model->idesp_ing),
	'Update',
);

$this->menu=array(
	array('label'=>'List EspecieIngresada', 'url'=>array('index')),
	array('label'=>'Create EspecieIngresada', 'url'=>array('create')),
	array('label'=>'View EspecieIngresada', 'url'=>array('view', 'id'=>$model->idesp_ing)),
	array('label'=>'Manage EspecieIngresada', 'url'=>array('admin')),
);
?>

<h1>Update EspecieIngresada <?php echo $model->idesp_ing; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>