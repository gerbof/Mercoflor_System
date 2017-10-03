<?php
/* @var $this TipoEspecieController */
/* @var $model TipoEspecie */

$this->breadcrumbs=array(
	'Tipo Especies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoEspecie', 'url'=>array('index')),
	array('label'=>'Manage TipoEspecie', 'url'=>array('admin')),
);
?>

<h1>Create TipoEspecie</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>