<?php
/* @var $this EspecieIngresadaController */
/* @var $model EspecieIngresada */

$this->breadcrumbs=array(
	'Especie Ingresadas'=>array('index'),
	$model->idesp_ing,
);

$this->menu=array(
	array('label'=>'List EspecieIngresada', 'url'=>array('index')),
	array('label'=>'Create EspecieIngresada', 'url'=>array('create')),
	array('label'=>'Update EspecieIngresada', 'url'=>array('update', 'id'=>$model->idesp_ing)),
	array('label'=>'Delete EspecieIngresada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idesp_ing),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EspecieIngresada', 'url'=>array('admin')),
);
?>

<h1>View EspecieIngresada #<?php echo $model->idesp_ing; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idesp_ing',
		'idingreso_esp_ing',
		'idespecie_esp_ing',
		'fecha',
		'hora',
		'color',
		'precio',
		'stock',
	),
)); ?>
