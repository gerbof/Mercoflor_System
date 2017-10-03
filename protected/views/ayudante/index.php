<?php
/* @var $this AyudanteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ayudantes',
);

$this->menu=array(
	array('label'=>'Create Ayudante', 'url'=>array('create')),
	array('label'=>'Manage Ayudante', 'url'=>array('admin')),
);
?>

<h1>Ayudantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
