<?php
/* @var $this EspecieController */
/* @var $data Especie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idespecie')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idespecie), array('view', 'id'=>$data->idespecie)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_vulgar')); ?>:</b>
	<?php echo CHtml::encode($data->nom_vulgar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_cientifico')); ?>:</b>
	<?php echo CHtml::encode($data->nom_cientifico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idhabitat_especie')); ?>:</b>
	<?php echo CHtml::encode($data->idhabitat_especie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idregion_especie')); ?>:</b>
	<?php echo CHtml::encode($data->idregion_especie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idepoca_especie')); ?>:</b>
	<?php echo CHtml::encode($data->idepoca_especie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipo_especie')); ?>:</b>
	<?php echo CHtml::encode($data->idtipo_especie); ?>
	<br />


</div>