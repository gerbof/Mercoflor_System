<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->menu=array(
	array('label'=>'Actualizar Datos del Usuario', 'url'=>array('update', 'id'=>$model->idusuario)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idusuario),'confirm'=>'¿Esta seguro de ELIMINAR al Usuario?')),
);
?>

<h1><?php echo $model->nomyape; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'password',
		'cuit',
		'email',
		'direccion',
		'razon_social',
		'condicion_impositiva',
		'nrosocio',
		//'idperfil_usuario',
		array(
			'label'=>'Tipo de Usuario',
			'type'=>'raw',
			'value'=>CHtml::encode($model->idperfilUsuario->descripcion)
		),
		'activo',
	),
)); ?>

<?php 
if($model->ayudantes!=null){ ?>
	<h3>Ayudantes de <?php echo $model->nomyape; ?></h3>

<?php
	foreach($model->ayudantes as $ayu){
		$this->widget('zii.widgets.CDetailView', array(
		'data'=>$ayu,
		'attributes'=>array(
			'nomyape',
			'dni',
		),));
	}
}
?>