<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

?>
<script src="../js/script.js" type="text/javascript"></script>
<h1>Formulario para Nuevo Usuario</h1>

<?php if(Yii::app()->user->hasFlash('exito')): ?>

<div class="flash-success">
	<img id="exito" src="<?php echo Yii::app()->user->getFlash('exito'); ?>" alt="carga_exitosa"/>
</div>

<?php else:
 $clientScript=Yii::app()->getClientScript();
 $clientScript->registerScript('numSocio','var socio='.CJSON::encode($numSocio).';',CClientScript::POS_HEAD);
 $this->renderPartial('_form', array('model'=>$model, 'ayudante1'=>$ayudante1, 'ayudante2'=>$ayudante2)); 
endif; 
?>