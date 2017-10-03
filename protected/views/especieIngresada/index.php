<?php
/* @var $this EspecieIngresadaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Especie Ingresadas',
);

$this->menu=array(
	array('label'=>'Create EspecieIngresada', 'url'=>array('create')),
	array('label'=>'Manage EspecieIngresada', 'url'=>array('admin')),
);
?>

<h1>Especie Ingresadas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
