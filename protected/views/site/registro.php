<?php

$this -> pageTitle = 'Formulario de Registro';
$this -> breadcrumbs = array(
	'Registrarme',
);

?>
<h3> Formulario de Registro de Nuevo Usuario </h3>

<?php if(Yii::app()->user->hasFlash('success')): ?>

<div class="flash-success">
	<img id="exito" src="<?php echo Yii::app()->user->getFlash('success'); ?>" alt="carga_exitosa" />
	<div id="info">
		<p>Su Nombre de Usuario es: <?php echo Yii::app()->user->getFlash('user'); ?></p>
		<p>Su Contrase&#241;a es: <?php echo Yii::app()->user->getFlash('pass'); ?></p>
	</div>
</div>

<?php else: ?>
	<p>Para asociarse como nuevo usuario de la Cooperativa, por favor complete el siguiente formulario:</p>

	<?php $this->renderPartial('formRegistro', array('model'=>$model)); ?>

<?php endif; ?>