<?php
/* @var $this EpocaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Epocas',
);

$this->menu=array(
	array('label'=>'Create Epoca', 'url'=>array('create')),
	array('label'=>'Manage Epoca', 'url'=>array('admin')),
);
?>

<h1>Epocas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
