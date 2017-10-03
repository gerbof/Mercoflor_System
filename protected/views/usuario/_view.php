<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idusuario), array('view', 'id'=>$data->idusuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomyape')); ?>:</b>
	<?php echo CHtml::encode($data->nomyape); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuit')); ?>:</b>
	<?php echo CHtml::encode($data->cuit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('idperfil_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->idperfilUsuario->descripcion); ?>
	<br />
		
	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php 
		$dato=$data->activo;
		if ($dato==1)
			echo CHtml::encode('Activo')
		else
			echo CHtml::encode('Inactivo');
	?>
	<br/>
	
	<?php
	/*
	<b><?php echo CHtml::encode($data->getAttributeLabel('razon_social')); ?>:</b>
	<?php echo CHtml::encode($data->razon_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condicion_impositiva')); ?>:</b>
	<?php echo CHtml::encode($data->condicion_impositiva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nrosocio')); ?>:</b>
	<?php echo CHtml::encode($data->nrosocio); ?>
	<br />
	*/ ?>

</div>