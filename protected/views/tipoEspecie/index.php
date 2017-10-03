<?php
/* @var $this TipoEspecieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Especies',
);

$this->menu=array(
	array('label'=>'Create TipoEspecie', 'url'=>array('create')),
	array('label'=>'Manage TipoEspecie', 'url'=>array('admin')),
);
?>

<h1>Tipo Especies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
