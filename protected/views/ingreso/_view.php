<?php
/* @var $this IngresoController */
/* @var $data Ingreso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idingreso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idingreso), array('view', 'id'=>$data->idingreso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />


</div>