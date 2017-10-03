<?php
/* @var $this HabitatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Habitats',
);

$this->menu=array(
	array('label'=>'Create Habitat', 'url'=>array('create')),
	array('label'=>'Manage Habitat', 'url'=>array('admin')),
);
?>

<h1>Habitats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
