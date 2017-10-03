<?php
/* @var $this AyudanteController */
/* @var $data Ayudante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idayudante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idayudante), array('view', 'id'=>$data->idayudante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dni')); ?>:</b>
	<?php echo CHtml::encode($data->dni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomyape')); ?>:</b>
	<?php echo CHtml::encode($data->nomyape); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario_ayudante')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario_ayudante); ?>
	<br />


</div>