<?php
/* @var $this TipoEspecieController */
/* @var $model TipoEspecie */

$this->breadcrumbs=array(
	'Tipo Especies'=>array('index'),
	$model->idtipo=>array('view','id'=>$model->idtipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoEspecie', 'url'=>array('index')),
	array('label'=>'Create TipoEspecie', 'url'=>array('create')),
	array('label'=>'View TipoEspecie', 'url'=>array('view', 'id'=>$model->idtipo)),
	array('label'=>'Manage TipoEspecie', 'url'=>array('admin')),
);
?>

<h1>Update TipoEspecie <?php echo $model->idtipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>