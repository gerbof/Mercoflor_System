<?php
/* @var $this EspecieIngresadaController */
/* @var $data EspecieIngresada */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idesp_ing')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idesp_ing), array('view', 'id'=>$data->idesp_ing)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idingreso_esp_ing')); ?>:</b>
	<?php echo CHtml::encode($data->idingreso_esp_ing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idespecie_esp_ing')); ?>:</b>
	<?php echo CHtml::encode($data->idespecie_esp_ing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	*/ ?>

</div>