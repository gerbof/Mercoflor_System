<?php
/* @var $this TipoEspecieController */
/* @var $data TipoEspecie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipo), array('view', 'id'=>$data->idtipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>