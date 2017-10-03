<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->idusuario=>array('view','id'=>$model->idusuario),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('admin')),
	array('label'=>'Ver al Usuario', 'url'=>array('view', 'id'=>$model->idusuario)),

);
?>
<?php if(Yii::app()->user->hasFlash('exito')): ?>

<div class="flash-success">
	<img id="exito" src="<?php echo Yii::app()->user->getFlash('exito'); ?>" alt="carga_exitosa"/>
</div>

<?php else: ?>
<h1>Modificaci&oacute;n del Usuario <?php echo $model->username; ?></h1>

<?php 
$this->renderPartial('_form', array('model'=>$model)); 
endif; 
?>