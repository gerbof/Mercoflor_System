<?php
/* @var $this TipoEspecieController */
/* @var $model TipoEspecie */

$this->breadcrumbs=array(
	'Tipo Especies'=>array('index'),
	$model->idtipo,
);

$this->menu=array(
	array('label'=>'List TipoEspecie', 'url'=>array('index')),
	array('label'=>'Create TipoEspecie', 'url'=>array('create')),
	array('label'=>'Update TipoEspecie', 'url'=>array('update', 'id'=>$model->idtipo)),
	array('label'=>'Delete TipoEspecie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoEspecie', 'url'=>array('admin')),
);
?>

<h1>View TipoEspecie #<?php echo $model->idtipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipo',
		'descripcion',
	),
)); ?>
