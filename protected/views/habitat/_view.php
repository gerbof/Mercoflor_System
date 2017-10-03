<?php
/* @var $this HabitatController */
/* @var $data Habitat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idhabitat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idhabitat), array('view', 'id'=>$data->idhabitat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>