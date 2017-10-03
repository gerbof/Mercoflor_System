<?php
/* @var $this EpocaController */
/* @var $data Epoca */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idepoca')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idepoca), array('view', 'id'=>$data->idepoca)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>